@component('mail::message')

#A Heading

some text is written here just to show how it works.

- A list
- goes
- here

Some more stuff here, blablabla...

@component('mail::button', ['url'=>'https://laracasts.com'])
Visit Laracasts
@endcomponent

@endcomponent
