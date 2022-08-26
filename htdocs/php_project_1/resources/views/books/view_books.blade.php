
<html>
    <body>
        <h1>CRUD_books</h1>
        <table>
            <tr>
                <td>
                    id1
                </td>
                <td>
                    ФИО_Автора1
                </td>
                <td>
                    Книга1
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
                    ФИО_Автора2
                </td>
                <td>
                    Книга2
                </td>
                <td>
                    X
                </td>
            </tr>
        </table>
        <form method="post">
            <label>Выберите ФИО автора: <select name="name_book">
                <option>Автор1</option>
                <option>Автор2</option>
                <option>Автор3</option>
            </select>
            </label><br />
            <label>Введите название новой книги: <input name="name"></label><br />
            <input type="submit"><br />
        </form>
    </body>
</html>