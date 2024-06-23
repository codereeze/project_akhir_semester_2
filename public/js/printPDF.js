async function printPDF() {
    const {
        jsPDF
    } = window.jspdf;
    const content = document.getElementById('content-print');
    const canvas = await html2canvas(content, {
        scale: 2
    });

    const imgWidth = canvas.width;
    const imgHeight = canvas.height;
    const pdfWidth = imgWidth + 20; // Add margin
    const pdfHeight = imgHeight + 20; // Add margin

    const pdf = new jsPDF({
        orientation: 'portrait',
        unit: 'px',
        format: [pdfWidth, pdfHeight]
    });

    pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 10, 10, imgWidth, imgHeight);
    pdf.save('myfile.pdf');
}