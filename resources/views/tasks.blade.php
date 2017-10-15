<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My App</title>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br />
            <div class="jumbotron">
              <h1 class="display-3">This is myApp {{ $page }}</h1>
              <p class="lead">And below are the list of Todo list examples</p>
            </div>
            
            <!--Example 1 - binding input-->
            <h3>Example 1 - binding input</h3>
            <div id="root1">
                <input type="text" id="text" v-model="message" class="form-control" />
                <p style="margin-top: 10px;" class="pull-left">The value of the input is: <span class="label-info" style="color: #fff;padding: 1px;">@{{ message }}</span>.</p>
            </div>
            <script>
                new Vue({
                    el: '#root1',
                    data: {
                        message: 'hello world'
                    }
                });
            </script>
            <!--End Example 1 - binding input-->

            
            <br /><br />
            
            
            <!--Example 2 - Lists-->
            <h3>Example 2 - Lists</h3>
            <div id="root2">
                <ul>
                    <li v-for="name in names" v-text="name"></li>
                    <!--<li v-for="name in names">@{{ name }}</li>-->
                </ul>
<!--                    <input id="input" type="text" v-model="newName" v-on:keyup="addName" />-->
                    <input id="input" type="text" v-model="newName" />
                    
                    <!--<button v-on:click="addName">Add Name</button>-->
                    <button @click="addName">Add Name</button>
            </div>
            <script>
                var app = new Vue({
                    el: '#root2',
                    data: {
                        newName: '',
                        names: ['Nav 1', 'Nav 2', 'Nav 3', 'Nav 4']
                    },
                    methods: {
                        addName(){
                            this.names.push(this.newName);
                            this.newName = '';
                        }
                    },
                    mounted(){}
                });
            </script>
            <!--End Example 2 - Lists-->
            
            
            <br />
            
            
            <!--Example 3 - Binding Attributes-->
            <style>
                .color-red{color: red;}
                .is-loading{background-color: red;}
            </style>
            <h3>Example 3 - Binding Attributes & Classes</h3>
            <div id="root3">
                <!--<p v-bind:title="title">Hello world</p>-->
                <p :title="title">1-Hover Me to see how binding attributes work as.</p>
                
                <h5 :class="className">2-Bind Class.</h5>
                
                <button :class="{ 'is-loading': isLoading }" @click="toggleClass">Toggle Me</button>
            </div>
            <script>
                var app = new Vue({
                    el: '#root3',
                    data: {
                        title: 'Now the title is being set through JavaScript.',
                        className: 'color-red',
                        isLoading: false
                    },
                    methods: {
                        toggleClass(){
                            if(this.isLoading)
                                this.isLoading = false;
                            else
                                this.isLoading = true;
                        }
                    }
                });
            </script>
            <!--End Example 3 - Binding Attributes-->
            
            
            <br />
            
            
            <!--Example 4 - Computed Properties-->
            <h3>Example 4 - Computed Properties</h3>
            <div id="root4">
                <h5 v-text="new Date()"></h5>
                <h5>@{{ reversedMessage }}</h5>
                <br />
                
                <h4>All Tasks</h4>
                <ul>
                    <li v-for="task in tasks" v-text="task.description"></li>
                </ul>
                
                <h4>In-completed Tasks</h4>
                <ul>
                    <!--<li v-for="task in tasks" v-if="!task.completed" v-text="task.description"></li>-->
                    <!--or-->
                    <li v-for="task in incompleteTasks" v-text="task.description"></li>
                </ul>
                
                
            </div>
            <script>
                var app = new Vue({
                    el: '#root4',
                    data: {
                        message: 'Now the title is being set through JavaScript.',
                        tasks: [
                            {description: 'line number 1', completed: true},
                            {description: 'line number 2', completed: true},
                            {description: 'line number 3', completed: false},
                            {description: 'line number 4', completed: true},
                            {description: 'line number 5', completed: true},
                            {description: 'line number 6', completed: false},
                            {description: 'line number 7', completed: true},
                            {description: 'line number 8', completed: false}
                        ]
                    },
                    computed: {
                        reversedMessage(){
                            return this.message.split('').reverse().join('');
                        },
                        incompleteTasks(){
                            return this.tasks.filter(task => ! task.completed);
                        }
                    }
                });
            </script>
            <!--End Example 4 - Computed Properties-->
            
            <br /><br />
            
        </div>
    </body>
</html>