import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                price:  '' ,
                active:  false ,
                picture:  '' ,
                description:  '' ,
                stock:  '' ,
                
            }
        }
    }

});