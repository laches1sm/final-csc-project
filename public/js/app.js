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
        long: ""


    },

    methods: {

        onSubmit(){
            axios.post('events', this.$data);
            
        }

    }
});