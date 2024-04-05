<footer data-app-id="{{z(class)|upset_class()}}" class="section footer-classic section-full section-full-1 section-sm section-inset-2 bg-gray-3 context-dark text-md-center" id="contacts">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="subtitle-classic wow fadeInUp">Push Email</div>
        <h2>
            <span data-app-id="{{z(class)|upset_class()}}" class="d-inline-block wow fadeInLeft">现在就可以联系我们获取最大优惠咨询</span>
        </h2>
        <form data-app-id="{{z(class)|upset_class()}}" class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
            <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap wow fadeInRight">
                <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-name">Name</label>
                <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap wow fadeInRight">
                <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-email">E-Mail</label>
                <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap wow fadeInRight">
                <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-message">Message</label>
                <textarea data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="form-button text-center">
                <button data-app-id="{{z(class)|upset_class()}}" class="button button-default wow fadeInUp" type="submit">Send message</button>
            </div>
        </form>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="footer-classic-list-social wow fadeInUp">
            <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline list-social list-inline-sm">
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-linkedin" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-twitter" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-facebook" href="{{host}}"></a>
                </li>
                <li>
                    <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-instagram" href="{{host}}"></a>
                </li>
            </ul>
        </div>
        <p data-app-id="{{z(class)|upset_class()}}" class="rights wow fadeInUp">
            <span>&copy;&nbsp; </span>
            <span data-app-id="{{z(class)|upset_class()}}" class="copyright-year"></span>- All Rights Reserved <a href="{{host}}"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></a> .
        </p>
    </div>
</footer>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="snackbars" id="form-output-global"></div>
<script src="{{tempdir}}static/js/core.min.js"></script>
<script src="{{tempdir}}static/js/script.js"></script>