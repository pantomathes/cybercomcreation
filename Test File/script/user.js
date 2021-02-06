var array = localStorage.getItem('array');
		var items = JSON.parse(array);
		
		array = items;
		
		document.write('<table border = "1" id = "table1">');
		document.write('<tr>');
		document.write('<th>Name</th> <th>Email</th><th>Password</th><th>Date Of Birth</th><th>Age</th><th colspan="2">Action</th></tr> <tr>');
					
			if(array === null )
			{
				alert("Records not found!");
				document.getElementById("table1").style.display = "none";
				window.open("User.html");
			}			
			else
			{
				for(var k = 0 ; k < array.length; k++)
				{	
					document.write('<td>'+ array[k].name + '</td>' );
                    document.write('<td style="color: blue; text-decoration: underline;">'+ array[k].email + '</td>' );
                    document.write('<td>'+array[k].password+'</td>');
                    document.write('<td>'+ array[k].birthdate + '</td>' );
                    document.write('<td>'+array[k].age);
                    document.write('<td><a href="">edit</a></td><td><a onclick="deleteItem()">Delete</a></td>');
					document.write('</tr>');
				}
			}
			
            function addData(){
                var array=[];
                var name=document.getElementById("name").value;
                var email=document.getElementById("email").value;
                var pass=document.getElementById("pass").value;
                var date=document.getElementById("dob").value;
                var d=new Date(date);
                var mon_diff=Date.now() - d.getTime();
                var age_dt=new Date(mon_diff);
                var year=age_dt.getUTCFullYear();
                var age=Math.abs(year - 1970);
                var person = {
		            name : name,
                    email : email,
                    password: pass,
                    birthdate : date,
                    age: age
            	};
                if(localStorage.getItem('array'))
	            {
		            array = JSON.parse(localStorage.getItem('array'));
	            }

                array.push(person);
                localStorage.setItem("array", JSON.stringify(array));
         
            }