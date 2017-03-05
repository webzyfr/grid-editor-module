export var routes = [];

export var content_routes = {
    gridEditor: (resolve) => {
        require(['./components/GridEditorModule.vue'], resolve)
    },
    userGridEditor: (resolve) => {
        require(['./components/UserGridEditorModule.vue'], resolve)
    }
};

export default {
    routes,
    content_routes
}