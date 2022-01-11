var page = document.location+"";

page = page.split('?page=');

var template = page[1];

  var file = template.split("&");


var url = "./wp-content/themes/village_furry/template/"+file[0]+".vue";



     new Vue({
       el: '#my-app',
       components: {
         'my-component': httpVueLoader(url)
       }
     });
