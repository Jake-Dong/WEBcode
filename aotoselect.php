<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            #display {
                width:100%;
                display:none;
                position:absolute;
                z-index:9999;           
                float:right;
                border-left:solid 1px #dedede;
                border-right:solid 1px #dedede;
                border-bottom:solid 1px #dedede;
                overflow:hidden;
            }
    
            .display_box {
                padding:4px;
                font-size:12px;
                height:80px;
                background:#FFFFFF;
                color: #333333;
            }
            
            .display_box:hover {
                background:#fcffaa;
                color: black;
                cursor: pointer;
            }
            
            .boximage { 
                float:left;
                margin-right:10px;
            }
        </style>  
    
        <script>
            $(document).ready(function () {
                $("#keyword").keyup(function()   {
                    var keyword = $(this).val();
                    var dataString = 'searchword='+ keyword;                
                                
                                
                    if(keyword=='') { 
                        $("#display").hide();
                    } else {    
                        $.ajax({
                        type: "POST",
                        url: "suggestions.php",
                        data: dataString,
                        cache: false,
                        success: function(html) {               
                            $("#display").html(html).show();
                            }
                        });
                    } return false;                             
                });     
            }); 
    

            function goDetail(no) { 
                document.location.href="detail.php?no="+no;
            }   
            
            function checkSearch() { 
                var searchKeyword=document.getElementById("keyword").value;
                
                if(!searchKeyword.trim())
                    alert('검색어를 입력해주세요');
                else {
                    location.href='searchresult.php?q='+searchKeyword;
                }
            }
        </script>
    </head>
    <body>    
        <form action="javascript:checkSearch();">
            <div class="input-group">
                <input name="keyword" id="keyword" type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-danger" type="button" onclick="javascript:checkSearch('keyword');"><i class="icon-search"></i></button>
                </span>
            </div>
            <div id="display">
            </div>
        </form>

    </body>
</html>