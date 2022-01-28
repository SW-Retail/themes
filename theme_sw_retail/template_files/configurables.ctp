{templater_start}
{template_version:swretail_r5_9_34}

<!-- theme definitions, these will appear in the styling configuration of sw-retail  -->
{template_def:Hoofdkleur:De hoofdkleur in het thema van uw webshop:color:.tmplt_base_color:background-color:#6a329f}
{template_def:Hoofdkleur tekst:De tekstkleur voor tekst die in de hoofdkleur valt:color:.tmplt_base_color_text,ul.menu-vertical.tmplt_base_color_text a, .header *,.footer *:color:white}
{template_def:Steunkleur:De steunkleur van uw webshop:color:.tmplt_attention_color:color:#e69138}
{template_def:'Call to action kleur':De kleur die aandacht trekt om meer verkoop te maken:color:.tmplt_sales_color,.tmplt_sales_color\:hover:background-color:#cc0000}
{template_def:Selectie kleur:Deze kleur wordt toegepast op gekozen items:color:.alert-success:background-color:#cc0000}

{template_def:Hoofd container breedte:De maximale breedte van de webshop, in pixels:text:.container:max-width:1280px}


<!--    template_def: name in UI:description in UI:type of field:::default value:parameter name in theme , gets prefixed with theme_ -->
{template_def:Groepen filter:Laat een groepenfilter zien. Hiervoor moet een menu leftmenu aangemaakt worden:checkbox:::0:group_filter}

{template_def:Artikel beschrijving:Artikel beschrijving:text:::\{artfabr\} / \{fabrikant\}:article_description:article}

{template_def:Aantal weergave:Aantal artikelen weergeven onderaan het zoekresultaat:text:::\{amt_articles\} artikelen uit \{amt_articles_total\}:article_amounts:article_overview}

{trans:nl:paging_block_Volgende:Volgende}
{trans:nl:paging_block_Vorige:Vorige}
