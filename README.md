Vue Drupal Demo
----
A small Drupal 8 module that implements demo functionality for my presentation given at [DrupalCamp Krasnodar 2016](http://2016.drupalyug.ru/program/sessions/reaktivnyy-frontend-freymvork-dlya-lyudey).

## Installation

Enable the module as usual.

Create two custom blocks with the following content and put them into Sidebar.

1. Vue Demo 1: Phrase length

```html
<div id="demo1">
  <input placeholder="Enter a phrase..." type="text" v-model="phrase" /> {{length}}
</div>
```

2. Vue Demo 2: User list

```html
<div id="demo2">
  <ul>
    <li v-for="user in users">{{{ user.name }}}</li>
  </ul>
</div>
```


## Dependencies

- [vue_libraries](https://github.com/kkomelin/vue_libraries)
