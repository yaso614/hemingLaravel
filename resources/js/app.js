
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 * 먼저 이 프로젝트의 JavaScript 종속성을 모두 로드합니다.
 * Vue 및 기타 라이브러리가 포함됩니다.
 * 
 * 이것은 훌륭한 출발점입니다.  
 * Vue와 Laravel을 사용하여 강력하고 강력한 웹 애플리케이션을 구축 할 때 유용합니다.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 * 다음 코드 블록을 사용하여 Vue 구성 요소를 자동으로 등록 할 수 있습니다.
 * Vue 구성 요소에 대해이 디렉토리를 반복적으로 검색하고이를 "basename"으로 자동 등록합니다.
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 * 다음으로, 새로운 Vue 애플리케이션 인스턴스를 생성하고
 * 그 페이지. 그런 다음이 애플리케이션에 구성 요소를 추가하기 시작할 수 있습니다.
 * 또는 고유 한 필요에 맞게 JavaScript 스캐 폴딩을 사용자 정의하십시오.
 */

const app = new Vue({
    el: '#app'
});
