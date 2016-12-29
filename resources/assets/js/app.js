
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('MainLayout', require('./layouts/Main.vue'));
// Vue.component('VLink', require('./components/VLink.vue'));


// const Home = { template: '<div>This is Home</div>' }
// const Foo = { template: '<div>This is Foo</div>' }
// const Bar = { template: '<div>This is Bar {{ $route.params.id }}</div>' }

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', name: 'home', component: require('./pages/Home.vue') },
    { path: '/key/:id', name: 'key', component: require('./pages/Key.vue') },
    { path: '/level/:id', name: 'level', component: require('./pages/Level.vue') }
  ]
})

const app = new Vue({
  el: '#app',
  router
  // template: `
    // <div id="app">
    //   <h1>Named Routes</h1>
    //   <p>Current route name: {{ $route.name }}</p>
    //   <ul>
    //     <li><router-link :to="{ name: 'home' }">home</router-link></li>
    //     <li><router-link :to="{ name: 'foo' }">foo</router-link></li>
    //     <li><router-link :to="{ name: 'bar', params: { id: 123 }}">bar</router-link></li>
    //   </ul>
    //   <router-view class="view"></router-view>
    // </div>
  // `
})







// routes = require('./routes');

// // const app = new Vue({
// //     el: '#app'
// // });
// routes = routes.default
// console.log(routes.default);

console.log(window.location.pathname)

// const app = new Vue({
//   el: '#app',
//   data: {
//     router,
//     currentRoute: window.location.pathname
//   },
//   // computed: {
//   //   ViewComponent () {
//   //     const matchingView = routes[this.currentRoute]

//   //     console.log(this.currentRoute,routes,routes[this.currentRoute]);

//   //     console.log(_)

//   //     return matchingView
//   //       ? require('./pages/' + matchingView + '.vue')
//   //       : require('./pages/404.vue')
//   //   }
//   // },
//   // render (h) {
//   //   return h(this.ViewComponent)
//   // }
// })

// window.addEventListener('popstate', () => {
//   app.currentRoute = window.location.pathname
// })
