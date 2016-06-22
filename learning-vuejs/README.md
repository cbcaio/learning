# learning vue-js 

### Intro

In order to run VueJs you only need to import the vue.js javascript file in the view and you can start using it.
(http://vuejs.org/)
 
#### Example 1 - Vue instance, showing variables and model binding

1- Setting Vue's application scope: 
  - Its easy, just define id="something" inside some html tag and then instantiate a 
new vue inside a 'script' tag, like this:

```
<script>
    new Vue({
       el: '#something'
        ,
        data:{
            message : 'Hello World'
        }
    });
</script>
```

2- Now everything is set, to show de stuff on the screen use {{ message }} where message is the variable name 
declared inside 'data', to model-bind these variables use the directive v-model.

- Check example1.html

#### Example 2 - v-show, v-if 

In this example its introduced the directive v-show. This directive shows or hides the content of its associated tag 
depending on the result of an expression declared inside the directive.

```
<span class="error" v-show="!message">
    You must enter a message
</span>
```

In this case, the span tag and its content will only be shown if the message variable declared inside vue's 'data' 
has a value, otherwise the content will be hidden. 

There is a different directive which has similar results, the v-if directive. The difference is that the v-show only 
set the display of the element to none, the v-if removes the code completely form the view.

- Important/Good practice: All variables should be instantiated in the declaration, if needed set them to an empty 
string

```
data:{
    message : ''
}
```

- Check example2.html

#### Example 3 - v-on, events and 'prevent' modifier

  - Directives learned in this example: v-on
  - Events: submit & click
  - Event modifiers: prevent/stop

There are many ways to do the same thing using vue, in example 3 I show how to create a function to handle events and
 to prevent default submit actions using event modifiers (prevent/stop). Very simple stuff.
 
Check example3.html
  
#### Example 4 - Componenents

Now its time to introduce vue's components! A component is a block of reusable code that you can create and
use it anywhere inside you vue app. To create a global component use this code:

```
Vue.component('hello', {
    template: '<h4>Hello {{ subject }}</h4>',
    props: 'subject'
});
```

In this case the 'hello' word is the name of the component and also the tag name that its needed in order to 
create the component, like in '<hello></hello>'. 
  - The template defines what code will be generated and can be specified directly after 'template' or referenced 
  in a template file.
  - The props defines the properties passed in to the component
  - It is important to clarify that we can't instantiate the variable inside the component like we did in the 
  vue's app declaration, instead we should use a function like the one below
  
```
data: function() {
  return { count: 0 };
},
```
   
To create a local component all you need to do is specify the 'components' array inside the vue application and use 
the same code that was used to create the global component.
  
- Check example4.html

#### Example 5 - Computed properties, watch

We can watch properties as they change easily using this code inside vue application declaration:

```
watch: {
  first: function(modifiedFirst) {
    this.fullName = modifiedFirst . ' ' . this.last;
  },
  last: function(modifiedLast) {
      this.fullName = this.first . ' ' . modifiedLast;
    },
}
```

But..there is an easier way to achieve the same goal with Computed properties! They are basically the same as regular 
variables but instead of being defined inside the 'data' they are defined inside 'computed' and are evaluated by
 a function. Check it out below:
 
```
computed: {
  fullName: function() {
      return this.first . ' ' . this.last;
  }
}
```

- Check example5.html

#### Example 6 - Iteration, shortcut for binding and component's templates

In this example we will make a subscription plan. 

Directives: v-for (old v-repeat before v1.0), v-else
Cool stuff: ':' is used as a shortcut for binding 
Ways to specify a template: inline-template (just write the template inside the component tag after specifying the 
template-inline property), template tag inside html, external template file

```
<div v-for="plan in plans">
   <plan :plan="plan" :active.sync="active"></plan>
</div>
```

This is basically the only new code in this example. The plan specifies that the property 'plan' ( specified in the 
props array of the component) will be given the value of "plan" which is a string, when using the ':' before 'plan' we 
indicate that the property 'plan' will be binded to the 'plan' object that has been iterated.

After that, we use the modifier 'sync' in addition to the same biding explained above in order to keep the child's 
'active' property in sync with the parent's 'active' property (in this case the parent is the vue instance 
and the child is the component and both have a property called active).

- Check example6.html

#### Example 7 - Passing classes to html tags

Lists! Check the example7.html. (there isn't much of new stuff to talk about)

```
<li :class="{ 'completed': task.completed }"
    v-for="task in tasks"
    @click="toggleCompletedFor(task)"
>
```

This part is interesting because there is many ways to pass the class name to the li tag.
  
```
1. Passing many classes through an array
    :class="['class1','class2','class3']"
2. Passing an object
    :class="{ 'completed': task.completed }" 
3. Passing an vue variable
    data: {
        classNames: []
    }
and then
    :class="classNames" 
```

- Check example7.html

#### Example 8 - Creating a custom component

Now we will redo the previous example with one change: we will make a custom component, declare it outside of 
the html and make it reusable.

```
Vue.component('tasks', {
    template: '#tasks-template',
    props: ['list']
});
```

The only difference in the template is that the line v-for="task in tasks" needs to be changed to v-for="task in 
list", because now the property is declared inside the component as list. To use it:

```
<tasks :list="tasks"></tasks>
```

- Check example8.html


#### Example 9 - Making a task list

The main point of this example is to demonstrate how easy is to use vue with lists. 
 
- Filtering a list
  
```
computed: {
  remaining: function() {
      return this.list.filter(this.inProgress).length;
  }
},
methods: {
    ...
  isCompleted: function(task) {
      return task.completed;
  },
```
  
  Here we have a computed property named 'remaining' declared and its purpose is to go trough the property 'list' and
  retrieve all the tasks that has 'completed' equals false. In order to do that we pass a filter which runs trough
  all entries of our 'list' and pass every one to the method inProgress, those who return true are returned to 
  the filter.

- Removing an item from the list
  
```
deleteTask: function(task) {
  this.list.$remove(task);
},
```
    
  This $remove method internally searches for and removes an item from target Array by calling splice() internally,
  it is just another way of saying:

```
var index = this.items.indexOf(item)
if (index !== -1) {
this.items.splice(index, 1)
}
```

- Check example9.html