<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF Viewer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal">
            View PDF
        </button>
    </div>

    <div class="modal fade" id="pdfModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PDF Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfIframe" src="" frameborder="0" width="100%" height="100%"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById('pdfModal').addEventListener('show.bs.modal', function () {
            const iframe = document.getElementById('pdfIframe');
            // This is the correct way to set the src on click
            iframe.src = "{{ route('view.pdf') }}"; 
        });

        document.getElementById('pdfModal').addEventListener('hidden.bs.modal', function () {
            const iframe = document.getElementById('pdfIframe');
            iframe.src = "";
        });
    </script>

</body>
</html>