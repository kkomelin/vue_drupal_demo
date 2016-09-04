Vue Drupal Demo
----
Drupal 8 module that implements demo functionality for my presentation about [Vue.js](https://vuejs.org/) given at [DrupalCamp Krasnodar 2016](http://2016.drupalyug.ru/program/sessions/reaktivnyy-frontend-freymvork-dlya-lyudey).

## Installation

Enable the module as usual.

Then you may place existing blocks "Vue Demo 1 (in code): Phrase Length" and "Vue Demo 2 (in code): User List" into a sidebar or 
create two custom blocks (admin/structure/block/block-content) with the content below and place them into a sidebar.
Please use Full HTML format for custom blocks.

1) Vue Demo 1: Phrase Length  

```html
<div id="demo1">
  <input placeholder="Enter a phrase..." type="text" v-model="phrase" /> {{length}}
</div>
```

2) Vue Demo 2: User List  

```html
<div id="demo2">
  <ul>
    <li v-for="user in users">{{{ user.name }}}</li>
  </ul>
  <button v-on:click="reverse">reverse</button>
</div>
```

Make sure you granted 'View user information' permission to your user in order to see the user list in the second example.

## Dependencies

- [vue_libraries](https://github.com/kkomelin/vue_libraries)
- rest (core)
- views (core)
