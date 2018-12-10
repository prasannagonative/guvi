var app = new Vue({
  el: '#app',
  data: {
    appName: '',
    description: '',
    author: '',
    users: '',
    errr: false,
    suc: false,
    first_name: '',
    last_name: '',
    mobile_number: '',
    email: '',
    password: '',
    success_data: '',
    err_data: ''
  },
  created: function() {
        this.checkforLoggedIn();
  },
  methods: {      
    checkforLoggedIn: function() {
        if(this.$cookies.isKey("session_id_key") && ((this.$cookies.get("session_id_key")).length > 0)) {
            window.location = "http://prasanna.istardevelopers.in/guvi/index.html";
        } 
      },
      login (submitEvent) {
            axios.post('http://prasanna.istardevelopers.in/guvi/login.php', {
                email: submitEvent.target.elements.email.value,
                password: submitEvent.target.elements.password.value
            })
            .then(function (response) {             
            console.log(response);
                if(response.data.status == "success") {  
                    app.success_data = response.data.msg;    
                    this.$cookies.set("session_id_key", (response.data.session_id_key), 60 * 60 * 1); // exp after 1hr                                  
                    this.$cookies.set("email", submitEvent.target.elements.email.value, 60 * 60 * 1);
                    app.errr = false;
                    app.suc = true;                    
                    setTimeout(function() {
                        app.suc = false;                        
                    }, 2000);
                    setTimeout(function() {                        
                        window.location = "http://prasanna.istardevelopers.in/guvi/index.html";
                    }, 3000);
                } else {
                    app.err_data = response.data.status;
                    app.errr = true;
                    app.suc = false;
                    setTimeout(function() {
                        console.log("fails");
                        app.errr = false;
                    }, 2000);
                }                                                
            })
            .catch(function (error) {
                console.log(error);
            });
      }
  }
});