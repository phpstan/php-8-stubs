<?php 

class XMLWriter
{
    /** @alias xmlwriter_open_uri */
    public function openUri(string $uri) : bool
    {
    }
    /** @alias xmlwriter_open_memory */
    public function openMemory() : bool
    {
    }
    /** @alias xmlwriter_set_indent */
    public function setIndent(bool $enable) : bool
    {
    }
    /** @alias xmlwriter_set_indent_string */
    public function setIndentString(string $indentation) : bool
    {
    }
    /** @alias xmlwriter_start_comment */
    public function startComment() : bool
    {
    }
    /** @alias xmlwriter_end_comment */
    public function endComment() : bool
    {
    }
    /** @alias xmlwriter_start_attribute */
    public function startAttribute(string $name) : bool
    {
    }
    /** @alias xmlwriter_end_attribute */
    public function endAttribute() : bool
    {
    }
    /** @alias xmlwriter_write_attribute */
    public function writeAttribute(string $name, string $value) : bool
    {
    }
    /** @alias xmlwriter_start_attribute_ns */
    public function startAttributeNs(?string $prefix, string $name, ?string $uri) : bool
    {
    }
    /** @alias xmlwriter_write_attribute_ns */
    public function writeAttributeNs(?string $prefix, string $name, ?string $uri, string $value) : bool
    {
    }
    /** @alias xmlwriter_start_element */
    public function startElement(string $name) : bool
    {
    }
    /** @alias xmlwriter_end_element */
    public function endElement() : bool
    {
    }
    /** @alias xmlwriter_full_end_element */
    public function fullEndElement() : bool
    {
    }
    /** @alias xmlwriter_start_element_ns */
    public function startElementNs(?string $prefix, string $name, ?string $uri) : bool
    {
    }
    /** @alias xmlwriter_write_element */
    public function writeElement(string $name, ?string $content = null) : bool
    {
    }
    /** @alias xmlwriter_write_element_ns */
    public function writeElementNs(?string $prefix, string $name, ?string $uri, ?string $content = null) : bool
    {
    }
    /** @alias xmlwriter_start_pi */
    public function startPi(string $target) : bool
    {
    }
    /** @alias xmlwriter_end_pi */
    public function endPi() : bool
    {
    }
    /** @alias xmlwriter_write_pi */
    public function writePi(string $target, string $content) : bool
    {
    }
    /** @alias xmlwriter_start_cdata */
    public function startCdata() : bool
    {
    }
    /** @alias xmlwriter_end_cdata */
    public function endCdata() : bool
    {
    }
    /** @alias xmlwriter_write_cdata */
    public function writeCdata(string $content) : bool
    {
    }
    /** @alias xmlwriter_text */
    public function text(string $content) : bool
    {
    }
    /** @alias xmlwriter_write_raw */
    public function writeRaw(string $content) : bool
    {
    }
    /** @alias xmlwriter_start_document */
    public function startDocument(?string $version = "1.0", ?string $encoding = null, ?string $standalone = null) : bool
    {
    }
    /** @alias xmlwriter_end_document */
    public function endDocument() : bool
    {
    }
    /** @alias xmlwriter_write_comment */
    public function writeComment(string $content) : bool
    {
    }
    /** @alias xmlwriter_start_dtd */
    public function startDtd(string $qualifiedName, ?string $publicId = null, ?string $systemId = null) : bool
    {
    }
    /** @alias xmlwriter_end_dtd */
    public function endDtd() : bool
    {
    }
    /** @alias xmlwriter_write_dtd */
    public function writeDtd(string $name, ?string $publicId = null, ?string $systemId = null, ?string $content = null) : bool
    {
    }
    /** @alias xmlwriter_start_dtd_element */
    public function startDtdElement(string $qualifiedName) : bool
    {
    }
    /** @alias xmlwriter_end_dtd_element */
    public function endDtdElement() : bool
    {
    }
    /** @alias xmlwriter_write_dtd_element */
    public function writeDtdElement(string $name, string $content) : bool
    {
    }
    /** @alias xmlwriter_start_dtd_attlist */
    public function startDtdAttlist(string $name) : bool
    {
    }
    /** @alias xmlwriter_end_dtd_attlist */
    public function endDtdAttlist() : bool
    {
    }
    /** @alias xmlwriter_write_dtd_attlist */
    public function writeDtdAttlist(string $name, string $content) : bool
    {
    }
    /** @alias xmlwriter_start_dtd_entity */
    public function startDtdEntity(string $name, bool $isParam) : bool
    {
    }
    /** @alias xmlwriter_end_dtd_entity */
    public function endDtdEntity() : bool
    {
    }
    /** @alias xmlwriter_write_dtd_entity */
    public function writeDtdEntity(string $name, string $content, bool $isParam = false, ?string $publicId = null, ?string $systemId = null, ?string $notationData = null) : bool
    {
    }
    /** @alias xmlwriter_output_memory */
    public function outputMemory(bool $flush = true) : string
    {
    }
    /** @alias xmlwriter_flush */
    public function flush(bool $empty = true) : string|int
    {
    }
}