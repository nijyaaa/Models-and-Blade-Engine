<tbody>
    @foreach($books as $book)
    <tr class="odd:bg-white odd:dark:bg-pink-600 even:bg-gray-50 even:dark:bg-pink-400 border-b dark:border-pink-100">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $book->title }}
        </th>
        <td class="px-6 py-4">
            {{ $book->author }}
        </td>
        <td class="px-6 py-4">
            {{ $book->isbn }}
        </td>
        <td class="px-6 py-4">
            {{ $book->description }}
        </td>
        <td class="px-6 py-4">
            {{ $book->date_published }}
        </td>
        <td class="px-6 py-4">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
        </td>
    </tr>

    @endforeach


</body>
</html>