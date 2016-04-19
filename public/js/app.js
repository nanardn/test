$(function () {
    $('#menu-toggle').click(function () {
        $('#wrapper').toggleClass('toggled');

        return false;
    });

    $('textarea').summernote({
        height: 300
    });

    $('.dataTable').each(function () {
        var table = $(this).DataTable({
            aaSorting: [],
            sDom: '<"toolbar">frtip'
        });

        $('#filter').keyup(function () {
            table.search($(this).val()).draw();
        });
    });

    $('input.date').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('select:not([multiple])').select2();
    $('select[multiple]').multiSelect();

    $('.wizard').bootstrapWizard({
        nextSelector: '.btn-next',
        onPrevious: function (tab, navigation, index) {
            var aktif = navigation.find('li.active');

            //wizard navigation styling
            aktif.removeClass("completed")
            aktif.nextAll().removeClass("completed");
            aktif.find('a > p').html(index + 2);
            aktif.prev().find('a > p').html(index + 1);
        },
        onNext: function (tab, navigation, index) {
            var kategori = $('.select2').find('#select2-certification_category_id-container').attr('title');
            var c = 0;

            $('[required]', $('a', tab).attr('href')).each(function () {
                if (!$(this).val()) {
                    c += 1;
                }
            });

            // skip step 3 handle: next
            if (index == 3 && kategori == 'Survailen') {
                c -= 1;
            }

            if (c > 0) {
                return false;
            }

            //wizard navigation styling
            var aktif = navigation.find('li.active');
            aktif.addClass("completed");
            aktif.prevAll().addClass("completed");
            aktif.find('a > p').html('<i class="fa fa-check"></i>');
        },
        onTabClick: function () {
            return false;
        },
        onTabShow: function (tab, navigation, index) {
            var current = index + 1;
            var total = navigation.find('li').length;

            var kategori = $('.select2').find('#select2-certification_category_id-container').attr('title');
            var info = $('.wizard').find('#skip-info');

            if (index == 2 && kategori == 'Survailen') {
                console.log('skip lahhh..');
                info.show();
                info.nextAll().hide();
            } else {
                info.hide();
                info.nextAll().show();
            }


            var wizard = navigation.closest('.wizard');

            if (current === 1) {
                wizard.find('.btn-previous').hide();
                wizard.find('.btn-submit').hide();
            } else if (current >= total) {
                wizard.find('.btn-next').hide();
                wizard.find('.btn-submit').show();
            } else {
                wizard.find('.btn-next').show();
                wizard.find('.btn-previous').show();
                wizard.find('.btn-submit').hide();
            }
        },
        previousSelector: '.btn-previous',
        tabClass: 'nav wizard-nav'
    });

    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
});

