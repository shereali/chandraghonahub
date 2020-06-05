<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light pt-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto navbar-right">
                            <li class="nav-item">
                                <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link" to="/members">Members</router-link>
                            </li>
                                <li class="nav-item">
                                <router-link class="nav-link" to="/gallery">Gallery</router-link>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Institutes
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <router-link class="dropdown-item" to="/institute">K.P.M High School & College</router-link>
                                            <router-link class="dropdown-item" to="/institute">K.R.C High School</router-link>
                                            <router-link class="dropdown-item" to="/institute">Karnaphuli Sheshu Beddaloy</router-link>
                                            <router-link class="dropdown-item" to="/institute">Karnaphuli College</router-link>
                                            <router-link class="dropdown-item" to="/institute">Chittagong University</router-link>
                                </div>
                            </li>
                           
                            <li class="nav-item">
                                <router-link class="nav-link" to="/registration">Registration</router-link>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</template>
