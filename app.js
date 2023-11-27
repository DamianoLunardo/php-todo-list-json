const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'To Do List',
            todos: [],
            newTodo: '',
        }
    },
    methods: {
        fetchData(){
            axios.get('./server.php').then(res =>{
                console.log(res.data.results)
                this.todos = res.data.results
            })
        },
        storeTodo() {
            console.log(this.newTodo)
            const data = {
                todo: this.newTodo,
            }
            axios.post('store.php', data, {
                headers:{
                    'Content-Type': 'multipart/form-data'
                }
            }).then(res => {
                this.todos = res.data.todos 
                this.newTodo = ''
            })
        },
        deleteTodo(index){
            this.todos.splice(index, 1);

            axios.post('delete.php', {index}, {
                headers:{
                    'Content-Type': 'multipart/form-data'
                },
            }).then (res => {
                this.todos = res.data.todos
            })
            
        },
    },
    created(){
        this.fetchData()
    },
}).mount('#app')