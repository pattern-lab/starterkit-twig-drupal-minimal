# Menu's
Menu's can be set by copying and altering menu~main.json. The name should be menu~[menu-name].json
In the json-file, alter the menu_name variable to the desired menu-name.

## Menu items
Menu items can be added by adding the following code in:
```"items": []```

```
{
 "content": {
   "include()": {
     "pattern": "atoms-link",
     "with": {
       "data": "Home",
       "icon": "icon-home",
       "link_base_class": "nolink",
       "attributes": {
         "Attribute()": {
           "href": "#"
         }
       }
     },
     "only": true
   }
 }
}
```

### Menu item nolink
As you can see you can add or alter quite some things. Only in case of a *nolink* add the **link_base_class**, it is set by default to *link*.

### Menu item icon
For a menu item with a icon, add ```"icon": "[icon-name]"``` to the pattern.

## Submenu's
It is possible to add submenus to the json. Within a pattern, added under the ```"content"``` tag, you should add the following array.

```
"below": [
]
```
