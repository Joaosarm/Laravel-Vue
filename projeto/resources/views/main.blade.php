<!DOCTYPE html>
    <head>
        <style>
            body{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            div{
                display: flex;
                align-items: center;
                justify-content: center;
                background-color:gray;
                width: 60vw;
                height: 25vh;
                border-radius: 10px;
                overflow: scroll;
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <h1>
            @for($i = 0; $i < count($results); $i++)
                <div>
                    Técnico {{ $results[$i]->technician }}
                    {{ $results[$i]->date }}
                    {{ $results[$i]->deadline }}
                    {{ $results[$i]->address }}
                    {{ $results[$i]->OS_status }}
                </div>
            @endfor
        </h1>
    </body>


