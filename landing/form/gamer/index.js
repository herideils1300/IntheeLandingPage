const form = document.getElementsByTagName("form")[0]
var backend_adress = this.location.protocol + "localhost:3000/register/";


document.onload = () => {
       form.action = backend_adress
       form.onsubmit = () => {
              this.location.href = "../../"
       }
}
