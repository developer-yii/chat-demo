var HelperApp = function() {

    const testEmpty = function(value, defaultValue = '') {
        if (value === '' || value === null || value === undefined) {
            return defaultValue;
        } else {
            return value
        }
    }

    const getAutoNumber = function(id) {
        return AutoNumeric.getNumber(id);
    }

    const ajax_request = function(options) {

        const defaults = {
            type: 'POST',
            url: '',
            async: 'true',
            params: {},
            beforesend: () => {},
            onsuccess: () => {},
            onerror: () => {},
            oncomplete: () => {},
        }

        options = $.extend(defaults, options);
        // options.params['_token'] = $('meta[name="csrf-token"]').attr('content');

        last_response = false;
        $.ajax({
            url: options.url,
            async: options.async,
            type: options.type,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            data: options.params,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                options.beforesend()
            },
            success: function(data) {
                options.onsuccess(data);
                show_notify_message(data);
            },
            error: function(xhr, status, message) {
                const error = {
                    xhr: xhr,
                    status: status,
                    message: message
                };
                let show_notify = options.onerror(error);
                show_notify = testEmpty(show_notify) ? true : show_notify;
                if (show_notify)
                    toastr.error(data.notify.message);
            },
            complete: function(xhr, status, message) {
                options.oncomplete(last_response);
            }
        });
    }

    const get_ajax_request = function(options) {

        const defaults = {
            type: 'POST',
            url: '',
            async: 'true',
            params: {},
            beforesend: () => {},
            onsuccess: () => {},
            onerror: () => {},
            oncomplete: () => {},
        }

        options = $.extend(defaults, options);
        // options.params['_token'] = $('meta[name="csrf-token"]').attr('content');

        last_response = false;
        $.ajax({
            url: options.url,
            async: options.async,
            type: options.type,
            dataType: 'json',
            data: options.params,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                options.beforesend()
            },
            success: function(data) {
                options.onsuccess(data);
                show_notify_message(data);
            },
            error: function(xhr, status, message) {
                const error = {
                    xhr: xhr,
                    status: status,
                    message: message
                };
                let show_notify = options.onerror(error);
                show_notify = testEmpty(show_notify) ? true : show_notify;
                if (show_notify)
                    toastr.error(data.notify.message);
                console.log(xhr);
                console.log(message);
            },
            complete: function(xhr, status, message) {
                options.oncomplete(last_response);
            }
        });
    }

    const show_notify_message = function(data) {
        if (data.notify) {
            if (data.notify.title) {
                switch (data.notify.type) {
                    case "warning":
                        toastr.warning(data.notify.message, data.notify.title);
                        break;

                    case "error":
                        toastr.error(data.notify.message, data.notify.title);
                        break;

                    case "success":
                        toastr.success(data.notify.message, data.notify.title);
                        break;

                    default:
                        toastr.info(data.notify.message, data.notify.title);
                        break;
                }
            } else {
                switch (data.notify.type) {
                    case "warning":
                        toastr.warning(data.notify.message);
                        break;

                    case "error":
                        // Swal.fire('Erro',data.notify.message,'error');
                        toastr.error(data.notify.message);
                        break;

                    case "success":
                        toastr.success(data.notify.message);
                        break;

                    default:
                        toastr.info(data.notify.message);
                        break;
                }
            }
        }
    }

    /**
     * @param {string} element id example: HelperApp.openModal('#add_product').
     */
    const openModal = (id) => {
        let myModalEl = document.querySelector(id)
        let modal = bootstrap.Modal.getOrCreateInstance(myModalEl)
        modal.show()
    }

    /**
     * @param {string} element id example: HelperApp.closeModal('#add_product').
     */
    const closeModal = (id) => {
            let myModalEl = document.querySelector(id)
            let modal = bootstrap.Modal.getOrCreateInstance(myModalEl)
            modal.hide()
        }
        /**
         * @param {string} element id example: ('#language_table', {url: url, columns: columns }).
         */
    const initDatatable = (id, options) => {
        const defaults = {
            bProcessing: true,
            bServerSide: true,
            language: {
                processing: '<div class="blockui-message" style="width: 100px;display: flex;align-items: center;justify-content: space-between;"><span class="spinner-border text-primary"></span><span>Loading...</span></div>'
            },
            searching: true,
            ordering: false,
            pageLength: 10,
            serverSide: true,
            stateSave: false,
            type: 'GET',
            url: '',
            select: options.select,
            drawCallback: () => {},
        }
        const data = {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        }

        options = $.extend(defaults, options);

        if (options.dataType === 'custom_function') {            
            options.ajax = {
                type: options.type,
                data: function(d) {
                    d.input_val = $(id).closest('.card').find(".search_input_val").val();
                    d.select_val = $(id).closest('.card').find(".select_input_val").val();
                },
                url: options.url
            }
        }else if (options.dataType === 'custom_function_maintenance') {
            options.ajax = {
                type: options.type,
                data: function(d) {
                    d.input_val = $(id).closest('.card').find(".search_input_val").val();
                    d.select_val = $(id).closest('.card').find(".select_input_val").val();
                    d.input_date_val = $(id).closest('.card').find(".date_input_val").val();
                },
                url: options.url
            }
        } else {
            options.ajax = {
                type: options.type,
                data: Object.assign(data, options.data),
                url: options.url
            }
        }


        let datatable = null;
        if ($(id).closest('.main_product_attr_table').find('.custom_search').length) {
            datatable = $(id).DataTable(options);
            $(id).closest('.main_product_attr_table').find('.custom_search').on('keyup', function(e) {
                datatable.search(e.target.value).draw();
            })
            return datatable
        } else if ($(id).closest('.tab-pane').find('.custom_search').length > 1) {
            datatable = $(id).DataTable(options);
            $(id).closest('.col-md-6').find('.custom_search').on('keyup', function(e) {
                datatable.search(e.target.value).draw();
            })
            return datatable
        } else if ($(id).closest('.tab-pane').find('.custom_search').length) {
            datatable = $(id).DataTable(options);
            $(id).closest('.tab-pane').find('.custom_search').on('keyup', function(e) {
                datatable.search(e.target.value).draw();
            })
            return datatable
        }

        const customfilterSearch = document.querySelector('.search_attribute');

        if (customfilterSearch) {
            let dataTableId = options.dataTableId;
            datatable = $('#' + dataTableId).DataTable(options)
            customfilterSearch.addEventListener('keyup', function(e) {
                datatable.search(e.target.value).draw();
            });
        } else {
            datatable = $(id).DataTable(options)

            const filterSearch = document.querySelector('[data-kt-filter="search"]');
            if (filterSearch) {
                filterSearch.addEventListener('keyup', function(e) {
                    datatable.search(e.target.value).draw();
                });
            }
        }

        return datatable
    }



    const parseFloatToTable = (value, symbol, fixed = 2) => {
        if (value === '')
            return (0.00).toFixed(fixed) + ' ' + symbol;
        else if (typeof value === 'string') {
            value = value.replace(" ", "");
            if (isNaN(value))
                return (0.00).toFixed(fixed) + ' ' + symbol;
            else
                return parseFloat(value).toFixed(fixed).replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ' + symbol;
        } else if (typeof value === 'number')
            return parseFloat(value).toFixed(fixed).replace(/\B(?=(\d{3})+(?!\d))/g, " ") + ' ' + symbol;
    }

    const parseDateToTable = (value, input_format = 'YYYY-MM-DD H:mm', output_format = 'DD-MM-YYYY HH:mm') => {
        return moment(value, input_format).format(output_format);
    }

    const getFloatVal = (value) => {
        if (!value)
            return 0.00;
        else if (typeof value === 'number')
            return isNaN(value) ? 0.00 : parseFloat(value);
        else if (value === '')
            return 0.00;
        else if (typeof value === 'string') {
            value = value.replace(" ", "");
            return isNaN(value) ? 0.00 : parseFloat(value);
        }
    }



    const isS2Empty = (val) => {
        if (val !== '' && val && val !== 'undefined') {
            return false
        }
        return true;
    }

    //#region math and lm
    const round = (value, decimals = 2) => {
        return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
    }

    const block = (id) => {
        let target = document.querySelector(id);
        let blockUI = new KTBlockUI(target);
        blockUI.block();
    }

    const unblock = (id) => {
        let target = document.querySelector(id);
        // let blockUI = new KTBlockUI(target);
        // blockUI.release();
        let blockUI = KTBlockUI.getInstance(target);
        blockUI.release();
        blockUI.destroy();

    }

    return {
        ajax_request: ajax_request,
        get_ajax_request: get_ajax_request,
        testEmpty: testEmpty,
        getAutoNumber: getAutoNumber,
        parseFloatToTable: parseFloatToTable,
        openModal: openModal,
        closeModal: closeModal,
        getFloatVal: getFloatVal,
        isS2Empty: isS2Empty,
        round: round,
        parseDateToTable: parseDateToTable,
        block: block,
        unblock: unblock,
        initDatatable: initDatatable,
    }

}()