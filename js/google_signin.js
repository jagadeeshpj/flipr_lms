 function logout(){
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut();  
                    jQuery.ajax({
                                url:'../logout.php',
                                success:function(result){
                                        window.location.href="../login.php";
                                }
                        });
                    
                }
                
                function onLoad(){
                       gapi.load('auth2',function (){
                              gapi.auth2.init();
                       }); 
                }
                
                function gmailLogIn(userInfo){
                        var userProfile=userInfo.getBasicProfile();
                        
                        
                        jQuery.ajax({
                                url:'../login_check.php',
                                type:'post',
                                data:'user_id='+userProfile.getId()+'&name='+userProfile.getName()+'&image='+userProfile.getImageUrl()+'&email='+userProfile.getEmail(),
                                success:function(result){
                                        window.location.href="../login.php";
                                }
                        });
                }
