<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    @foreach($invitation->componentData as $componentData)
        @if($componentData->component_id == 4)
            <h1>{{ $componentData->key }}</h1>
            <p>{{ $componentData->value }}</p>
        @endif
    @endforeach
</body>
</html>