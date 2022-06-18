<template>
    <div class="header_main_wrapper">


        <div class="header">
            <div class="nav-bar-wrapper-ok">
                <ul>
                    <li><router-link class="nav-link" to="/"><img src="/vueimage/sc.png" alt=""></router-link></li>
                    <li><router-link class="nav-link second-nav" to="/">Home</router-link></li>
                </ul>
            </div>
        </div>





        <div class="main-content" style="margin-top: -76px;">
            <!-- Header -->

            <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9" id="main_page_main">
                <div class="container" style="margin-top:111px">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 px-5">
                                <h1 class="text-white">Welcome to Soft Commerce</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="separator separator-bottom separator-skew zindex-100" style="position:absolute; width:100%" id="main_page_bottom">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div> -->
            </div>

            <!-- Page content -->
            <div class="container mt--8 pb-5" style="margin-top:-90px">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7">
                        <div class="card bg-secondary border-0 mb-0" style="background:white !important; box-shadow: 0 0 2rem 0 rgb(136 152 170 / 15%);">

                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">

                                    <small>Sign in with your account</small> <!--/ <a target="_blank" href="https://workupjob.com/register"> Create an account</a> -->
                                </div>
                                <form role="form" method="post" action="" @submit.prevent="login">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative"  style="opacity:0.9">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            </div>
                                            <input class="form-control" v-model="form.mobile" placeholder="Phone" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative"  style="opacity:0.9">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            </div>
                                            <input class="form-control" v-model="form.full_name" placeholder="Full name" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group"  style="opacity:0.9" >
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Password" v-model="form.password" type="password">
                                        </div>
                                    </div>

                                    <div class="form-group"  style="opacity:0.9">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Password" v-model="form.confirm_password" type="password">
                                        </div>
                                    </div>


                                    <div class="text-center">
                                        <button type="button"  @click="checkPhone" v-if="isDisabled" style="padding: 0.5em 1.25rem; color: #fff; border-color: #f8f9fe;background-color: #5e72e4;" name="login_do" class="btn btn-primary my-4 myLoginBtn">Next</button>

                                        <button type="submit" v-else :disabled='isDisabled' style="padding: 0.5em 1.25rem; color: #fff; border-color: #f8f9fe;background-color: #5e72e4;" name="login_do" class="btn btn-primary my-4 myLoginBtn">Sign in</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="https://workupjob.com/reset-password" class="text-light" style="color: #ced4da!important;     color: #ced4da!important; text-decoration:none;"><small>Forgot password?</small></a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://workupjob.com/register" class="text-blue;" style="text-decoration:none;"><small><p style="color:green;    font-size: 1rem;
    font-weight: 300;
    line-height: 1.7;

"> <b>Create new account</b></p></small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>






        <footer class="py-6" id="footer-main">
            <div class="container">

                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted" style="color: #8898aa!important;">
                            © 2021 Work Up Job
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="https://workupjob.com/about" class="nav-link">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a href="https://workupjob.com/privacy-policy" class="nav-link">Privacy Policy</a>
                            </li>

                            <li class="nav-item">
                                <a href="https://workupjob.com/terms" class="nav-link">Terms &amp; Condition</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://workupjob.com/support" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://workupjob.com/faq" class="nav-link">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://workupjob.com/workupjob_android.apk" class="nav-link">Download Android App</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://workupjob.com/refund-policy" class="nav-link">Refund Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>





    </div>

</template>

<script>
export default {
    data(){
        return{
            form:{
                mobile:null,
                full_name:null,
                password:null,
                confirm_password:null,

            },
            isPassword:false,
            isDisabled:true
        }
    },

    methods:{
        login(){
            User.login(this.form);
        },

        checkPhone(){

           axios.post('/user/check/by/mobile', this.form)
               .then(res => {
                   console.log(res.data);
                   if(res.data.user == true){
                       this.isPassword = true;
                       this.isDisabled = false;
                   }else if(res.data.user == 0){

                       this.$router.push({path:'/register', query : {mobile:this.mobile}});
                   }else{

                   }
               })
               .catch(error => console.log(error.response.data));

        }
    }
}
</script>


<style lang="scss" scope>
#main_page_main{
    position: relative;
}

#main_page_bottom{
    position: absolute;
    bottom: 0;
}

i, input{
    color: #ced4da!important;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
    background:#22ab59;
    border-radius: 2px;
}

.myLoginBtn {
    padding: 0.5em 1.25rem;
}
.header_main_wrapper{
    width: 100%;
    position: relative;

    .header{

        top: 0;
        width: 100%;
        border: 0;
        background-color: transparent;
        box-shadow: none;
        display:flex;
        overflow: hidden;
        // position: absolute;
        // width: 100%;

        .nav-bar-wrapper-ok{
            display: block !important;
            width: 100%;
            overflow: hidden;
            z-index: 200;
            // background: linear-gradient(44deg, #0a26c4 0, #734ed8 100%) !important;


            ul{
                list-style:none;
                li{

                    color: white;
                    padding: 10px;
                    width: 125px;
                    float: left;
                    .nav-link{
                        text-decoration: none;
                        color: white;
                        img{
                            width: 40px;
                            height: 40px;
                        }
                    }
                    .second-nav{
                        padding-top: 18px;
                    }

                }
            }

        }


    }


}

.bg-gradient-primary {
    background: linear-gradient(306deg, #d61326 0, #161515 100%) !important;
    height: 429px;
}

#footer-main{
    ul{
        li{
            a{
                color: #8898aa!important;
                text-decoration: none;
            }
        }
    }
}

</style>
