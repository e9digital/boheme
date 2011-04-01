module SiteHelper
  def full_page_title
    [@page_title, @site_name].compact.join(@title_delimiter)
  end

  def navbar_class(n)
    if n == "home" && current_page == "/index.html"             ||
       n == "company" && current_page =~ /^\/company/ ||
       n == "films" && current_page == "/films.html"  ||
       n == "press" && current_page == "/press.html"

      "current"
    end
  end
end
