class Errors{

    constructor(){

        this.errors = {};

    };

    has(field){
        return this.errors.hasOwnProperty(field);
    }

    
    get(field){

        if(this.errors[field]) {
            return this.errors[field][0];
        }

    }

    any(){
        return Object.keys(this.errors).length > 0;
    }
    record(errors){
        this.errors = errors;
    }

    clear(field){
        delete this.errors[field];
    }

}



new Vue({
    el: '#app',

    data: {

        title: "",
        description_long: "",
        description_short: "",
        interest_1: "",
        interest_2: "",
        time: "",
        loc_string: "",
        lat: "",
        long: "",
        errors: new Errors(),


    },

    methods: {

        onSubmit(){
            axios.post('/events', this.$data)
            .then(response => alert('Success'))
            .catch(error => this.errors = error.response.data);
            
            
        }

    }
});