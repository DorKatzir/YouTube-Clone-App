<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>todoList</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
        <!-- Styles -->
        <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/myScript.js') }}"></script>

    </head>
    <body>
  
        <main class="container" style="max-width: 680px;">

            <article>
                    <hgroup>
                        <h2>Todo List</h2>
                        <h3>Laravel CRUD App</h3>
                    </hgroup>

                <form class="flex-between" action="{{ route('saveItem') }}" method="post" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    {{-- <label for="listItem">New Todo Item</label> --}}
                    <input type="text" name="listItem" id="listItem" placeholder="Type new todo note...">
                    <button type="submit">Save Note to List</button>
                </form>
                    
                <footer>
                    @unless(count($listItems) == 0)
                        @foreach($listItems as $listItem)
                        <!-- Item -->
                        <div class="list-item">
                            <span>{{ $listItem->name }}</span>
                            <form class="list-mb" action="{{ route('markComplete', $listItem->id) }}" method="post" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <button class="secondary" type="submit" name="markComplete">Mark Complete</button>
                            </form>
                        </div>
                            
                        @endforeach
                        @else <p>No Items found</p>
                    @endunless
                  
                </footer>
            </article>

            

        </main>
                
    </body>
</html>
