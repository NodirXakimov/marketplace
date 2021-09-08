<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Quramiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item text-right">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav" v-if="loggedIn">
                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nodir
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav" v-else>
                         <li class="nav-item">
                            <a href="#" class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#loginCanvas" aria-controls="loginCanvas">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="loginCanvas" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Login</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" v-model="loginUser.email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" v-model="loginUser.password">
                    </div>
                    <button class="mt-3 btn btn-sm btn-outline-success" @click="login">Login</button>
                </div>
            </div>
        </div>
</template>
<script>
export default {
    props: ['loggedIn'],
    data(){
       return {
            loginUser: {
            email: '',
            password: ''
        }
       }
    },
    methods: {
        login(){
            console.log(this.loginUser)
        }
    },
}
</script>
<style scoped>

</style>