new Vue({
  el: '#vue',
  data() {
    return {
      Fullname: '',
      mail: '',
      password: '',
      number: '',
      name_error: false,
      mail_error: false,
      password_error: false,
      number_error: false,
      end_reg: true,
      end_mess: false
    }
  },
  methods: {

    check() {
      axios
        .post('main.php', {
        name: this.Fullname,
        mail: this.mail,
        password: this.password,
        number: this.number
        })
        .then(responce => {
        if (responce.data.name === 'null_name'){
          this.name_error = true
        }
        if (responce.data.mail === 'null_mail'){
          this.mail_error = true
        }
        if (responce.data.password === 'null_password'){
          this.password_error = true
        }
        if (responce.data.number === 'null_number'){
          this.number_error = true
        }
        if (responce.data.success === 'true'){
          this.end_reg = false,
          this.end_mess = true
        }
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    }
  }
})
