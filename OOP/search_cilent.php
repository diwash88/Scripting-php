<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search autodmation</title>
</head>
<body>
    <input type="text" placeholder="search student" id="search" >
    <h3> Student</h3>
    <ul id="student" >
        <li>Kiran</li>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


        <script>
            $('#search').keyup(function(e){
                let name = e.target.value;
           
             $.ajax ({
                method :'GET',
                url :'search_server.php?name='+name,
                success:function(data){
                    data =JSON.parse(data);
                        let listData = "";
                        for(let item in data){
                            listData += "<li>" + item.name  + "</li>"
                        }
                        $('#studentlist').html(listData);   //
                    //console.log(data);
                }
            })
            });
           /* let studentListElement =document.getElementById(student);
            
            let request = new XMLHttpRequest();
            searchInput =Document.getElementById('search');
            searchInput.addEventListiner('keyup',function(e){
                let name = e.target.value;
                request.open("GET","search_server.php? name=" + name);
            request.send();
            request.onreadystatechange = function(){
                if(request.readyState = 4){
                    if(request.status = 200){

                        let data =request.responseText;
                        data =JSON.parse(data);
                        let listData = "";
                        for(let item in data){
                            listData += "<li>" + item.name  + "</li>"
                        }studentListElement.innerHTML =listData;
                        //console.log(data);
                    }else{
                        console.error("Error accured");
                    }
                }
            }

            })*/  
           

            
        </script>
                
        


    
</body>
</html>
