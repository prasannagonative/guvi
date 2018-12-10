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
    err_data: '',
    name: '',    
    mobile: '',
    address: '',   
    file_name: '' ,
    key_value: this.$cookies.get("session_id_key")
  },
  created: function() {        
        this.checkSessionKey();
        this.loadUserData();
  },
  methods: {    
      logout (submitEvent) {
        this.$cookies.set("session_id_key","",1);
        window.location = "http://prasanna.istardevelopers.in/guvi/login.html";
      },  
      checkSessionKey: function() {          
        axios.post('http://prasanna.istardevelopers.in/guvi/checkToken.php', {
                session_id: this.key_value,
            })
            .then(function (response) {     
            console.log(response);           
                if(response.status == 200) {
                    if(response.data.status == "Invalid") {  
                        this.$cookies.set("session_id_key","",1);
                        window.location = "http://prasanna.istardevelopers.in/guvi/login.html";
                    }      
                }       
            })
            .catch(function (error) {
                console.log(error);
            });
      },
      loadUserData: function() {  
        var url_data = 'http://prasanna.istardevelopers.in/guvi/';
        this.file_name = url_data+(this.$cookies.get("email")) + '.json';
        axios.get(this.file_name)        
        .then(function (response) {
            console.log(response);            
            app.users = JSON.stringify(response.data);  
            app.users = JSON.parse(app.users);
            app.email = this.$cookies.get("email");
            app.name = app.users["name"];
            app.mobile = app.users["mobile"];
            app.address = app.users["address"];
        })
        .catch(function (error) {
            console.log(error);
        })
      }
  }
});