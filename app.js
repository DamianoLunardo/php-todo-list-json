const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'To Do List',
            todo: ['PHP', 'JavaScript', 'HTML', 'CSS'],
        }
    }
}).mount('#app')