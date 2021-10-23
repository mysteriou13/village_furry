


</div>




<script type="text/javascript">

var page = document.location+"";

page = page.split('?page=');

var template = page[1];

var url = "./wp-content/themes/village_furry/template/"+template+".vue";



     new Vue({
       el: '#my-app',
       components: {
         'my-component': httpVueLoader(url)
       }
     });
   </script>


<footer>

<footer>






  </body>
</html>
