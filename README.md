Vue Drupal Demo
----
Drupal 8 module that implements demo functionality for [Vue.js](https://vuejs.org/) presentation given at [DrupalCamp Krasnodar 2016](http://2016.drupalyug.ru/program/sessions/reaktivnyy-frontend-freymvork-dlya-lyudey).

## Installation

1) Put vue libraries into **/libraries** so that the paths are:

> /libraries/vue/vue.min.js  
> /libraries/vue/vue.js  

> /libraries/vue-resource/vue-resource.min.js  
> /libraries/vue-resource/vue-resource.js  


2) Enable the module as usual.

3) Use "Vue Demo 1 (in code): Phrase Length" and "Vue Demo 2 (in code): User List" blocks or 
create two custom blocks (admin/structure/block/block-content) with the content below.
_Please use Full HTML format for custom blocks._

- Vue Demo 1: Phrase Length  

```html
<div id="demo1">
  <input placeholder="Enter a phrase..." type="text" v-model="phrase" /> {{length}}
</div>
```

- Vue Demo 2: User List  

```html
<div id="demo2">
  <ul>
    <li v-for="user in users">{{{ user.name }}}</li>
  </ul>
  <button v-on:click="reverse">reverse</button>
</div>
```

4) Place the blocks into a sidebar.

5) Make sure you granted 'View user information' permission to your user in order to see the user list in the second example.

## Dependencies

- rest (core)
- views (core)

## License

[GNU GPL v2](https://github.com/kkomelin/vue_drupal_demo/blob/master/LICENSE.txt)
