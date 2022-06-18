// import { times } from "lodash";
import AppStorage from "./AppStorage";
import Token from "./Token";

class User{
    login(data){
        axios.post('/login-by-mobile',data)
            .then(res =>{
                // this.responseAfterLogin(res);
                // console.log(res.data.url);
                // this.$router.push(res.data.url);
                let  url = res.data.url;
                window.location = url;
            })
            .catch(error => console.log(error.response.data));
    }

    responseAfterLogin(res){
        // const access_token = res.data.access_token;
        // const username = res.data.user;
        //
        // if(Token.isValid(access_token)){
        //     AppStorage.store(username, access_token);
        // }
        window.location='/';

    }


    hasToken(){
        const storedToken = AppStorage.getToken();

        if(storedToken){
            return Token.isValid(storedToken)? true : this.logOut();
        }

        return false;
    }


    logedIn(){
        return this.hasToken();
    }

    logOut(){
        AppStorage.clear();
        window.location = '/';
    }

    name(){
        if(this.logedIn()){
            return AppStorage.getUser();
        }
    }

    id(){
        if(this.logedIn()){
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub;
        }
    }

    own(id){
        return this.id() == id;
    }

    admin(){
        return this.id() == 1;
    }



}

export default User = new User();
