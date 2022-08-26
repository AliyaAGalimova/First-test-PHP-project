
<html>
    <body>
        <h1>CRUD_authors</h1>
        <table>
            <tr>
                <td>
                    id1
                </td>
                <td>
                    ФИО_Автора1_(0)
                </td>
                <td>
                    X
                </td>
            </tr>
            <tr>
                <td>
                    id2
                </td>
                <td>
                    ФИО_Автора2_(0)
                </td>
                <td>
                    X
                </td>
            </tr>
        </table>
        dd(Authors::all())
        <form method="post" action="{{route('authors.index')}}">
            @csrf
            <label>Введите имя нового автора: <input name="name"></label><br />
            <input type="submit"><br />
        </form>
    </body>
</html>