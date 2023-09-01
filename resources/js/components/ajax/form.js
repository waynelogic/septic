export default class Form {
    constructor(form) {
        this.obForm = form;
        this.read();
        return [this.request, this.options];
    }
    read() {
        let formData = new FormData(this.obForm);
        let data = {};
        formData.forEach(function(value, key){
            if(value) {
                data[key] = value;
            }
        });
        let json = JSON.stringify(data);
        this.request = this.obForm.dataset.request;
        this.options = {
            data: json,
            token: formData.get('_token')
        };
    }
}
