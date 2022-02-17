<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header class="container">
            <img class="logo" src="img/logo.png" alt="" />
            <div class="filter-box">
            <span>Filtra per generi : </span>
            <select 
                name="" 
                id="filter-select"
                v-model="selectValue"
                @change="filtraDischi()"
            >
                <option value=""></option>
                <option v-for="(opt,index) in filterGenre" :value=opt.genre>
                    {{opt.genre}}
                </option>
            </select>
            </div>
        </header>

        <main class="container">
            <div class="container">
                <div 
                    v-for="(item, index) in dischiFiltrati"
                    class="container-disco"
                >
                    <img :src="item.poster" :alt="item.title">
                    <h3>{{item.title}}</h3>
                    <div>
                        {{item.author}}
                        <br>
                        {{item.year}}
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="../main.js"></script>
</body>
</html>

