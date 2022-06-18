<template>
    <div class="containter main_wrapper_index_page" style="overflow:hidden">

        <router-view />
        <div class="row">

            <div class="col-12" style="">
                <div class="navbar-main-wrapper-index"  :class="{'mobile':mobile}">

                    <ul style="font-size:larger;" class="col-12" :class="{'nav_section_now':mobile}">



                        <li style="width:50px; padding-left:15px" :class="{'mobile_service':mobile}" >
                            <div class="btn-group">
                                <!-- <button type="button" style="padding:0; margin:0; border-radius:50%;margin-top:5px; background:transparent; border:none;" class="btn btn-light" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> -->

                                <img data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" style="width:30px; height:30px;max-width:100%; color:black; cursor:pointer; margin-top:10px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAtZJREFUWEftl0FWGkEQhr/CuCc3wF0iLvAEkRNEThA5gTBmH9nHCZ4g5gTKCeQGzkJMdvEGYR+h8rp7ZtLTzDDB93xmYa14dPc/1dV//VUleKa7dGjQ5IF7+cG9v1b2W/c4MP/LLdPavW9o8YoWS+ZyR5LtF/NDzeIWX8EBpjZlm54kzENw3eUI4QvQTNfmKEO542Jlb4cmv7lcwV7QN5d0DrS5ATolt5jKjG4hSm85pGEBV21JT75zVdjf5jr4eLacyIx9SW9jbl9uyr4fsjXOmvMWNAOyTyr2clXYfdE9TlE+VW4SRnLLaQ7aRte9t8ywUbWR/Rfs2k1BWLXNL+/tQ1/mMuO1FwHDlerowlBSAv6suNWcbXZ8ImrbAh5V7L+QGf3cAUdAg52RtXhswY4joWP1qqdKP2S2OlBDrJC0Cdt0w6ypw/bf6wDlfQqcsOB8nRZY4IbdD0smZSmYR8Kl+XGOLUwy7cgdWEesp1x7cSDM2Q9AC2wdOJcZ47Lw68DWDKMdh+n6FUtGMv6r8f45jRiA5UCG/U1ipy2ZFFel1lhmDAtg7uMmC8LUmrOkGzqhka0ZxoHQLiTGKqFhvwEsN5OrXmXUyNaB7ObhmSuJ6eXsH9CiYXWg3Bp066XYqJX3FBrVSHHsSbELvYlAlY3+Cwee9wmsFFfr+9OTMCeMK53Pk4ZPKbV12C9S/Phy7HL8XRriicSrHXEgSMeo7RETGkzks2vlN29IBjTZ4tqC+WaAF1aKC228RrZ7KmvL+sbpzVuyqKYli72WzDjrpLi8JVuyI9qukcugLdOopimNvab0hEO0YoZw0RvWS3HYlm9WC0zJrW75YbT5YHLCzcr7Z1wQEjnzBhNXuqsHE+hvPpqtC6vQk7NgNBtyjRRmTudu6uzjhlPH7OJwat6zJBXVEFG4LDihTDHcGqfDaZ6vm47nH9PxPM3pdbKrpjkx4/kDc79r+gPb/2m/TXJfXQAAAABJRU5ErkJggg==" alt="Icon-1">
                                <!-- </button> -->
                                <div class="dropdown-menu dropdown-menu-left" style="border-radius: 15px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                                    <!-- 1st row -->
                                    <div style="display:flex;">
                                        <button type="button" class="btn btn-outline-warning btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                            </svg>
                                        </button>

                                        <button type="button" class="btn btn-outline-danger btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16">
                                                <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- 2nd row -->

                                    <div style="display:flex">
                                        <button type="button" class="btn btn-outline-warning btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                            </svg>
                                        </button>

                                        <button type="button" class="btn btn-outline-danger btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16">
                                                <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- 3rd row -->
                                    <div style="display:flex">
                                        <button type="button" class="btn btn-outline-warning btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                            </svg>
                                        </button>

                                        <button type="button" class="btn btn-outline-danger btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-lg m-2" style="border-radius: 50px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16">
                                                <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/>
                                            </svg>
                                        </button>
                                    </div>


                                </div>

                            </div>
                        </li>


                        <li v-if="auth" :class="{'f_padding':mobile}">
                            <a class="nav-link" aria-current="page" href="/mypanel/dashboard">Dashboard</a>
                        </li>

                        <li v-else :class="{'f_padding':mobile}">
                            <router-link class="nav-link" to="/login">Login</router-link>

                        </li>

                        <!-- <li :class="{'f_padding':mobile}">
                          <a class="nav-link" aria-current="page" href="#">About</a>
                        </li> -->
                    </ul>




                </div>

                <div class="right-navbar-wrapper">
                    <ul>
                        <li v-if="auth">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="nav-link" aria-current="page" href="#">
                                    Hi, Razib
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" style="border-radius: 15px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                                    <!-- 1st row -->
                                    <div >
                                        <div class="user_profile_main">
                                            <div class="user_profile_image">
                                                <span>R</span>
                                            </div>

                                            <h3>Razib Hossen</h3>
                                            <p>01795805817</p>
                                            <p>example@gmail.com</p>
                                        </div>
                                        <div class="footer_part">
                                            <p>Sign out</p>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </li>

                    </ul>
                </div>

            </div>



            <div class="col-12" >
                <div class="middle"  :class="{'mobile_s':mobile}">
                    <img alt="search" class="mt-5 mb-5" style="float:left;" width="100" height="100" src="/vueimage/sc.png">
                    <h1 :class="{'logo_server':mobile}" style="margin-top:80px; margin-left:10px; float:left;">SOFT COMMERCE</h1>
                </div>

            </div>


            <!-- search -->

            <div class="col-12">
                <center>
                    <div class="bar" :class="{'mobile_main':mobile}" style="position:relative;">
                        <input class="searchbar" type="text" style="color:black !important;" title="Search" :class="{'server_service':mobile}">
                        <a href="#" style="position:absolute; margin-top: 4px;"> <img class="search" src="/vueimage/icon.svg" title="Search"></a>
                    </div>
                </center>
            </div>


            <!-- buttons -->
            <div class="col-12">
                <div class="buttons1" :class="{'add_shotcut':mobile}">
                    <ul>
                        <li><a href="#"><span>R</span></a>Razib </li>
                        <li><a href="#"><span>G</span></a>Google </li>
                        <li><a href="#"><span>Y</span></a>Youtube </li>
                        <li><a href="#" data-toggle="modal" data-target="#staticBackdrop"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span></a> Add</li>

                    </ul>
                </div>
            </div>




            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="left:5%">
                    <div class="modal-content" style="height: 345px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add shortcut</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" name="url" id="url" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm  btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <!-- </div> -->

</template>

<script>
export default {
    data(){
        return {
            auth:User.logedIn(),
            mobile:false,
        }
    },

    mounted(){
        console.log(window.outerWidth)
        if(window.outerWidth <= 500){
            this.mobile = true;
        }


    }
}
</script>

<style lang="scss" scope>

.user_profile_main{
    display: block;
    width: 300px;
    .user_profile_image{
        width: 100%;
        display: block;
        text-align: center;
        span{
            width: 60px;
            height: 60px;
            display: block;
            border-radius: 50%;
            background: blue;
            line-height: 60px;
            margin: 0 auto;
            color: white;

        }
    }

    h3{
        text-align: center;
        padding: 5px;
    }

    p{
        text-align: center;
    }

}

.footer_part{
    border-top: 1px solid #000000;
    p{
        text-align: center;
        cursor: pointer;
    }
}






.mobile{
    // width: 100%;
    // height: 100px;
    // // overflow: hidden;
    padding: 10px 0px;
    // // margin-bottom: 40px;
    // margin-top: 40px;
    margin-top: 10px;

}

.mobile_s{
    padding: 0 !important;

}
.server_service{
    // height: 60px !important;
    width: 70% !important;
}

.mobile_main{
    width: 90% !important;
}
.logo_server{
    // padding-left: -40px !important;
    font-size: 20px;

}


*{
    padding: 0;
    margin: 0;
}
.main_wrapper_index_page{
    overflow: hidden;
    width: 100%;
    background-color: #5498C1;
    height: 100vh;
    .navbar-main-wrapper-index{

        width: 80%;
        height: 78px;
        float: left;
        padding-top: 5px;
        ul{
            list-style: none;
            width: 100%;
            padding: 0;
            margin: 0;
            li{
                float: left;
                width: 70px;
                a{
                    span{
                        background: #b106a3;
                        border-radius: 47%;
                        width: 40px;
                        height: 40px;
                        display: block;
                        border-radius: 50%;
                        line-height: 40px;
                        text-align: center;
                    }
                    text-decoration: none;
                    color: white;
                    svg{
                        color: white;
                    }
                }
            }
        }
    }

    .right-navbar-wrapper{
        width: 20%;
        float: right;
        padding:5px;
        ul{
            list-style: none;
            float: right;
            li{
                color: white;
                font-size: 20px;
                a{
                    text-decoration: none;
                    color: white;
                }
            }

        }
    }


    .bar{
        background: white;
    }

    .middle{
        display: block;
        align-items: center;
        // justify-content: center;
        margin: 0 auto;
        width: 600px;
        margin-top: -5vh;
        padding: 20px;
        h1{
            color: white;
            display: inline;
        }
    }


    .buttons1{
        margin-top: 3vh;
        width:500px;
        display: block;
        text-align: center;
        margin: 0 auto;

        ul{
            list-style: none;
            text-align: center;

            li{
                width: 80px;
                float: left;
                padding: 15px;
                a{
                    text-decoration: none;
                    span{
                        width: 40px;
                        height: 40px;
                        display: block;
                        background: #5453f9;
                        border-radius: 50%;
                        line-height: 40px;
                        color: white;
                    }
                }
            }
        }
    }

}


</style>

<style>

.bar{
    margin:0 auto;
    width:525px;
    border-radius: 20px;

}

.searchbar{
    height:35px;
    border:none;
    width:450px;
    font-size:16px;
    border: 0;
    box-shadow: none;


}
.searchbar:focus{
    border: 0 !important;
    box-shadow: none;

}
.search{
    height:25px;
    position:relative;
    top:1px;
    left:10px;
}





</style>

