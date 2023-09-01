import Form from "./form.js";
import FlashMessage from "./flash.js";
export default new class AJAX {
    form($form) {
        $form.addEventListener('submit', (e) => {
            e.preventDefault();
            let [request, options] = new Form($form);
            this.sendRequest(request, options, $form);
        })
    }

    sendRequest(handler, options, $form = null) {
        fetch(handler, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-Token": options.token
            },
            body: options.data
        }).then(r => {
            $form.reset();
            FlashMessage.flashMsg({
                'text': 'Ваша форма отправлена',
                'class': 'success',
                'interval': 3
            });
        });
    }
}
