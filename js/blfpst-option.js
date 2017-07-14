/**
 * Created by Hideaki Oguchi on 2016/06/23.
 */
(function ($) {
    $(function () {
        $('input[name="mailer_type"]').on('change', function () {
            var mailer_type = $(this).val();
            selectMailerType(mailer_type);
        });

        function selectMailerType(mailer_type) {

            var $sendmail = $('input[name="sendmail"]');
            var $smtp_host = $('input[name="smtp_host"]');
            var $smtp_port = $('input[name="smtp_port"]');

            $sendmail.attr('required', false);
            $smtp_host.attr('required', false);
            $smtp_port.attr('required', false);
            $smtp_port.removeAttr('data-parsley-type');

            switch (mailer_type) {
                case 'sendmail':
                    enableSendmailField(true);
                    enableSMTPField(false);
                    $sendmail.attr('required', true);
                    break;

                case 'mail':
                    enableSendmailField(false);
                    enableSMTPField(false);
                    break;

                case 'smtp':
                    enableSendmailField(false);
                    enableSMTPField(true);
                    $smtp_host.attr('required', true);
                    $smtp_port.attr("data-parsley-type", "integer");
                    $smtp_port.attr('required', true);
                    break;
            }
        }

        function enableSendmailField(enable) {
            $('input[name="sendmail"]').prop('disabled', !enable);
        }

        function enableSMTPField(enable) {
            $('input[name="smtp_host"]').prop('disabled', !enable);
            $('input[name="smtp_port"]').prop('disabled', !enable);
        }

        // Default
        var mailer_type = $('input[name=mailer_type]:checked').val();
        selectMailerType(mailer_type);
    });
})(jQuery);
