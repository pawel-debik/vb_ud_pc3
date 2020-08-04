
<footer style="display:block; padding: 30px; background: #ccc;">
    How to create a snippet
    1. In PawelController add: public function footerAction(Request $request){ }
    2. In Resources/Views/Pawel add footer.html.php with the footer
    3. In Pimcore make an empty snippet 
    4. In layout.html.php echo $this->inc('/page_parts/footer');
    5. In pimcore snippet, set the desired Controller, Action, and Template
</footer>
