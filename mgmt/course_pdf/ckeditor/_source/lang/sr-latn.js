/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/**
 * @fileOverview Defines the {@link CKEDITOR.lang} object, for the
 * Serbian (Latin) language.
 */

/**#@+
   @type String
   @example
*/

/**
 * Constains the dictionary of language entries.
 * @namespace
 */
CKEDITOR.lang['sr-latn'] =
{
	/**
	 * The language reading direction. Possible values are "rtl" for
	 * Right-To-Left languages (like Arabic) and "ltr" for Left-To-Right
	 * languages (like English).
	 * @default 'ltr'
	 */
	dir : 'ltr',

	/*
	 * Screenreader titles. Please note that screenreaders are not always capable
	 * of reading non-English words. So be careful while translating it.
	 */
	editorTitle		: 'Rich text editor, %1', // MISSING

	// Toolbar buttons without dialogs.
	source			: 'Kôd',
	newPage			: 'Nova stranica',
	save			: 'Sačuvaj',
	preview			: 'Izgled stranice',
	cut				: 'Iseci',
	copy			: 'Kopiraj',
	paste			: 'Zalepi',
	print			: 'Štampa',
	underline		: 'Podvučeno',
	bold			: 'Podebljano',
	italic			: 'Kurziv',
	selectAll		: 'Označi sve',
	removeFormat	: 'Ukloni formatiranje',
	strike			: 'Precrtano',
	subscript		: 'Indeks',
	superscript		: 'Stepen',
	horizontalrule	: 'Unesi horizontalnu liniju',
	pagebreak		: 'Insert Page Break for Printing', // MISSING
	unlink			: 'Ukloni link',
	undo			: 'Poni�ti akciju',
	redo			: 'Ponovi akciju',

	// Common messages and labels.
	common :
	{
		browseServer	: 'Pretraži server',
		url				: 'URL',
		protocol		: 'Protokol',
		upload			: 'Pošalji',
		uploadSubmit	: 'Pošalji na server',
		image			: 'Slika',
		flash			: 'Fleš',
		form			: 'Forma',
		checkbox		: 'Polje za potvrdu',
		radio		: 'Radio-dugme',
		textField		: 'Tekstualno polje',
		textarea		: 'Zona teksta',
		hiddenField		: 'Skriveno polje',
		button			: 'Dugme',
		select	: 'Izborno polje',
		imageButton		: 'Dugme sa slikom',
		notSet			: '<nije postavljeno>',
		id				: 'Id',
		name			: 'Naziv',
		langDir			: 'Smer jezika',
		langDirLtr		: 'S leva na desno (LTR)',
		langDirRtl		: 'S desna na levo (RTL)',
		langCode		: 'Kôd jezika',
		longDescr		: 'Pun opis URL',
		cssClass		: 'Stylesheet klase',
		advisoryTitle	: 'Advisory naslov',
		cssStyle		: 'Stil',
		ok				: 'OK',
		cancel			: 'Otkaži',
		generalTab		: 'General', // MISSING
		advancedTab		: 'Napredni tagovi',
		validateNumberFailed	: 'This value is not a number.', // MISSING
		confirmNewPage	: 'Any unsaved changes to this content will be lost. Are you sure you want to load new page?', // MISSING
		confirmCancel	: 'Some of the options have been changed. Are you sure to close the dialog?', // MISSING

		// Put the voice-only part of the label in the span.
		unavailable		: '%1<span class="cke_accessibility">, unavailable</span>' // MISSING
	},

	// Special char dialog.
	specialChar		:
	{
		toolbar		: 'Unesi specijalni karakter',
		title		: 'Odaberite specijalni karakter'
	},

	// Link dialog.
	link :
	{
		toolbar		: 'Unesi/izmeni link',
		menu		: 'Izmeni link',
		title		: 'Link',
		info		: 'Link Info',
		target		: 'Meta',
		upload		: 'Pošalji',
		advanced	: 'Napredni tagovi',
		type		: 'Vrsta linka',
		toAnchor	: 'Sidro na ovoj stranici',
		toEmail		: 'E-Mail',
		target		: 'Meta',
		targetNotSet	: '<nije postavljeno>',
		targetFrame	: '<okvir>',
		targetPopup	: '<popup prozor>',
		targetNew	: 'Novi prozor (_blank)',
		targetTop	: 'Prozor na vrhu (_top)',
		targetSelf	: 'Isti prozor (_self)',
		targetParent	: 'Roditeljski prozor (_parent)',
		targetFrameName	: 'Naziv odredišnog frejma',
		targetPopupName	: 'Naziv popup prozora',
		popupFeatures	: 'Mogućnosti popup prozora',
		popupResizable	: 'Resizable', // MISSING
		popupStatusBar	: 'Statusna linija',
		popupLocationBar	: 'Lokacija',
		popupToolbar	: 'Toolbar',
		popupMenuBar	: 'Kontekstni meni',
		popupFullScreen	: 'Prikaz preko celog ekrana (IE)',
		popupScrollBars	: 'Scroll bar',
		popupDependent	: 'Zavisno (Netscape)',
		popupWidth		: 'Širina',
		popupLeft		: 'Od leve ivice ekrana (px)',
		popupHeight		: 'Visina',
		popupTop		: 'Od vrha ekrana (px)',
		id				: 'Id', // MISSING
		langDir			: 'Smer jezika',
		langDirNotSet	: '<nije postavljeno>',
		langDirLTR		: 'S leva na desno (LTR)',
		langDirRTL		: 'S desna na levo (RTL)',
		acccessKey		: 'Pristupni taster',
		name			: 'Naziv',
		langCode		: 'Smer jezika',
		tabIndex		: 'Tab indeks',
		advisoryTitle	: 'Advisory naslov',
		advisoryContentType	: 'Advisory vrsta sadržaja',
		cssClasses		: 'Stylesheet klase',
		charset			: 'Linked Resource Charset',
		styles			: 'Stil',
		selectAnchor	: 'Odaberi sidro',
		anchorName		: 'Po nazivu sidra',
		anchorId		: 'Po Id-ju elementa',
		emailAddress	: 'E-Mail adresa',
		emailSubject	: 'Naslov',
		emailBody		: 'Sadržaj poruke',
		noAnchors		: '(Nema dostupnih sidra)',
		noUrl			: 'Unesite URL linka',
		noEmail			: 'Otkucajte adresu elektronske pote'
	},

	// Anchor dialog
	anchor :
	{
		toolbar		: 'Unesi/izmeni sidro',
		menu		: 'Osobine sidra',
		title		: 'Osobine sidra',
		name		: 'Ime sidra',
		errorName	: 'Unesite ime sidra'
	},

	// Find And Replace Dialog
	findAndReplace :
	{
		title				: 'Find and Replace', // MISSING
		find				: 'Pretraga',
		replace				: 'Zamena',
		findWhat			: 'Pronadi:',
		replaceWith			: 'Zameni sa:',
		notFoundMsg			: 'Traženi tekst nije pronađen.',
		matchCase			: 'Razlikuj mala i velika slova',
		matchWord			: 'Uporedi cele reci',
		matchCyclic			: 'Match cyclic', // MISSING
		replaceAll			: 'Zameni sve',
		replaceSuccessMsg	: '%1 occurrence(s) replaced.' // MISSING
	},

	// Table Dialog
	table :
	{
		toolbar		: 'Tabela',
		title		: 'Osobine tabele',
		menu		: 'Osobine tabele',
		deleteTable	: 'Delete Table', // MISSING
		rows		: 'Redova',
		columns		: 'Kolona',
		border		: 'Veličina okvira',
		align		: 'Ravnanje',
		alignNotSet	: '<nije postavljeno>',
		alignLeft	: 'Levo',
		alignCenter	: 'Sredina',
		alignRight	: 'Desno',
		width		: 'Širina',
		widthPx		: 'piksela',
		widthPc		: 'procenata',
		height		: 'Visina',
		cellSpace	: 'Ćelijski prostor',
		cellPad		: 'Razmak ćelija',
		caption		: 'Naslov tabele',
		summary		: 'Summary', // MISSING
		headers		: 'Headers', // MISSING
		headersNone		: 'None', // MISSING
		headersColumn	: 'First column', // MISSING
		headersRow		: 'First Row', // MISSING
		headersBoth		: 'Both', // MISSING
		invalidRows		: 'Number of rows must be a number greater than 0.', // MISSING
		invalidCols		: 'Number of columns must be a number greater than 0.', // MISSING
		invalidBorder	: 'Border size must be a number.', // MISSING
		invalidWidth	: 'Table width must be a number.', // MISSING
		invalidHeight	: 'Table height must be a number.', // MISSING
		invalidCellSpacing	: 'Cell spacing must be a number.', // MISSING
		invalidCellPadding	: 'Cell padding must be a number.', // MISSING

		cell :
		{
			menu			: 'Cell', // MISSING
			insertBefore	: 'Insert Cell Before', // MISSING
			insertAfter		: 'Insert Cell After', // MISSING
			deleteCell		: 'Obriši ćelije',
			merge			: 'Spoj celije',
			mergeRight		: 'Merge Right', // MISSING
			mergeDown		: 'Merge Down', // MISSING
			splitHorizontal	: 'Split Cell Horizontally', // MISSING
			splitVertical	: 'Split Cell Vertically', // MISSING
			title			: 'Cell Properties', // MISSING
			cellType		: 'Cell Type', // MISSING
			rowSpan			: 'Rows Span', // MISSING
			colSpan			: 'Columns Span', // MISSING
			wordWrap		: 'Word Wrap', // MISSING
			hAlign			: 'Horizontal Alignment', // MISSING
			vAlign			: 'Vertical Alignment', // MISSING
			alignTop		: 'Top', // MISSING
			alignMiddle		: 'Middle', // MISSING
			alignBottom		: 'Bottom', // MISSING
			alignBaseline	: 'Baseline', // MISSING
			bgColor			: 'Background Color', // MISSING
			borderColor		: 'Border Color', // MISSING
			data			: 'Data', // MISSING
			header			: 'Header', // MISSING
			yes				: 'Yes', // MISSING
			no				: 'No', // MISSING
			invalidWidth	: 'Cell width must be a number.', // MISSING
			invalidHeight	: 'Cell height must be a number.', // MISSING
			invalidRowSpan	: 'Rows span must be a whole number.', // MISSING
			invalidColSpan	: 'Columns span must be a whole number.', // MISSING
			chooseColor : 'Choose' // MISSING
		},

		row :
		{
			menu			: 'Row', // MISSING
			insertBefore	: 'Insert Row Before', // MISSING
			insertAfter		: 'Insert Row After', // MISSING
			deleteRow		: 'Obriši redove'
		},

		column :
		{
			menu			: 'Column', // MISSING
			insertBefore	: 'Insert Column Before', // MISSING
			insertAfter		: 'Insert Column After', // MISSING
			deleteColumn	: 'Obriši kolone'
		}
	},

	// Button Dialog.
	button :
	{
		title		: 'Osobine dugmeta',
		text		: 'Tekst (vrednost)',
		type		: 'Tip',
		typeBtn		: 'Button', // MISSING
		typeSbm		: 'Submit', // MISSING
		typeRst		: 'Reset' // MISSING
	},

	// Checkbox and Radio Button Dialogs.
	checkboxAndRadio :
	{
		checkboxTitle : 'Osobine polja za potvrdu',
		radioTitle	: 'Osobine radio-dugmeta',
		value		: 'Vrednost',
		selected	: 'Označeno'
	},

	// Form Dialog.
	form :
	{
		title		: 'Osobine forme',
		menu		: 'Osobine forme',
		action		: 'Akcija',
		method		: 'Metoda',
		encoding	: 'Encoding', // MISSING
		target		: 'Meta',
		targetNotSet	: '<nije postavljeno>',
		targetNew	: 'Novi prozor (_blank)',
		targetTop	: 'Prozor na vrhu (_top)',
		targetSelf	: 'Isti prozor (_self)',
		targetParent	: 'Roditeljski prozor (_parent)'
	},

	// Select Field Dialog.
	select :
	{
		title		: 'Osobine izbornog polja',
		selectInfo	: 'Info',
		opAvail		: 'Dostupne opcije',
		value		: 'Vrednost',
		size		: 'Veličina',
		lines		: 'linija',
		chkMulti	: 'Dozvoli višestruku selekciju',
		opText		: 'Tekst',
		opValue		: 'Vrednost',
		btnAdd		: 'Dodaj',
		btnModify	: 'Izmeni',
		btnUp		: 'Gore',
		btnDown		: 'Dole',
		btnSetValue : 'Podesi kao označenu vrednost',
		btnDelete	: 'Obriši'
	},

	// Textarea Dialog.
	textarea :
	{
		title		: 'Osobine zone teksta',
		cols		: 'Broj kolona',
		rows		: 'Broj redova'
	},

	// Text Field Dialog.
	textfield :
	{
		title		: 'Osobine tekstualnog polja',
		name		: 'Naziv',
		value		: 'Vrednost',
		charWidth	: 'Širina (karaktera)',
		maxChars	: 'Maksimalno karaktera',
		type		: 'Tip',
		typeText	: 'Tekst',
		typePass	: 'Lozinka'
	},

	// Hidden Field Dialog.
	hidden :
	{
		title	: 'Osobine skrivenog polja',
		name	: 'Naziv',
		value	: 'Vrednost'
	},

	// Image Dialog.
	image :
	{
		title		: 'Osobine slika',
		titleButton	: 'Osobine dugmeta sa slikom',
		menu		: 'Osobine slika'