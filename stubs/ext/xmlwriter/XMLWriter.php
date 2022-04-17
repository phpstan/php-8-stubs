<?php 

class XMLWriter
{
    /**
     * @return bool
     * @alias xmlwriter_open_uri
     * @no-verify Behaviour differs from the aliased function
     */
    #[\Until('8.1')]
    public function openUri(string $uri)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_open_uri
     * @no-verify Behaviour differs from the aliased function
     */
    #[\Since('8.1')]
    public function openUri(string $uri) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_open_memory
     * @no-verify Behaviour differs from the aliased function
     */
    #[\Until('8.1')]
    public function openMemory()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_open_memory
     * @no-verify Behaviour differs from the aliased function
     */
    #[\Since('8.1')]
    public function openMemory() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_set_indent
     */
    #[\Until('8.1')]
    public function setIndent(bool $enable)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_set_indent
     */
    #[\Since('8.1')]
    public function setIndent(bool $enable) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_set_indent_string
     */
    #[\Until('8.1')]
    public function setIndentString(string $indentation)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_set_indent_string
     */
    #[\Since('8.1')]
    public function setIndentString(string $indentation) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_comment
     */
    #[\Until('8.1')]
    public function startComment()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_comment
     */
    #[\Since('8.1')]
    public function startComment() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_comment
     */
    #[\Until('8.1')]
    public function endComment()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_comment
     */
    #[\Since('8.1')]
    public function endComment() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_attribute
     */
    #[\Until('8.1')]
    public function startAttribute(string $name)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_attribute
     */
    #[\Since('8.1')]
    public function startAttribute(string $name) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_attribute
     */
    #[\Until('8.1')]
    public function endAttribute()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_attribute
     */
    #[\Since('8.1')]
    public function endAttribute() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_attribute
     */
    #[\Until('8.1')]
    public function writeAttribute(string $name, string $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_attribute
     */
    #[\Since('8.1')]
    public function writeAttribute(string $name, string $value) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_attribute_ns
     */
    #[\Until('8.1')]
    public function startAttributeNs(?string $prefix, string $name, ?string $namespace)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_attribute_ns
     */
    #[\Since('8.1')]
    public function startAttributeNs(?string $prefix, string $name, ?string $namespace) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_attribute_ns
     */
    #[\Until('8.1')]
    public function writeAttributeNs(?string $prefix, string $name, ?string $namespace, string $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_attribute_ns
     */
    #[\Since('8.1')]
    public function writeAttributeNs(?string $prefix, string $name, ?string $namespace, string $value) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_element
     */
    #[\Until('8.1')]
    public function startElement(string $name)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_element
     */
    #[\Since('8.1')]
    public function startElement(string $name) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_element
     */
    #[\Until('8.1')]
    public function endElement()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_element
     */
    #[\Since('8.1')]
    public function endElement() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_full_end_element
     */
    #[\Until('8.1')]
    public function fullEndElement()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_full_end_element
     */
    #[\Since('8.1')]
    public function fullEndElement() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_element_ns
     */
    #[\Until('8.1')]
    public function startElementNs(?string $prefix, string $name, ?string $namespace)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_element_ns
     */
    #[\Since('8.1')]
    public function startElementNs(?string $prefix, string $name, ?string $namespace) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_element
     */
    #[\Until('8.1')]
    public function writeElement(string $name, ?string $content = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_element
     */
    #[\Since('8.1')]
    public function writeElement(string $name, ?string $content = null) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_element_ns
     */
    #[\Until('8.1')]
    public function writeElementNs(?string $prefix, string $name, ?string $namespace, ?string $content = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_element_ns
     */
    #[\Since('8.1')]
    public function writeElementNs(?string $prefix, string $name, ?string $namespace, ?string $content = null) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_pi
     */
    #[\Until('8.1')]
    public function startPi(string $target)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_pi
     */
    #[\Since('8.1')]
    public function startPi(string $target) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_pi
     */
    #[\Until('8.1')]
    public function endPi()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_pi
     */
    #[\Since('8.1')]
    public function endPi() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_pi
     */
    #[\Until('8.1')]
    public function writePi(string $target, string $content)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_pi
     */
    #[\Since('8.1')]
    public function writePi(string $target, string $content) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_cdata
     */
    #[\Until('8.1')]
    public function startCdata()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_cdata
     */
    #[\Since('8.1')]
    public function startCdata() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_cdata
     * */
    #[\Until('8.1')]
    public function endCdata()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_cdata
     * */
    #[\Since('8.1')]
    public function endCdata() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_cdata
     */
    #[\Until('8.1')]
    public function writeCdata(string $content)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_cdata
     */
    #[\Since('8.1')]
    public function writeCdata(string $content) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_text
     */
    #[\Until('8.1')]
    public function text(string $content)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_text
     */
    #[\Since('8.1')]
    public function text(string $content) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_raw
     */
    #[\Until('8.1')]
    public function writeRaw(string $content)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_raw
     */
    #[\Since('8.1')]
    public function writeRaw(string $content) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_document
     */
    #[\Until('8.1')]
    public function startDocument(?string $version = "1.0", ?string $encoding = null, ?string $standalone = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_document
     */
    #[\Since('8.1')]
    public function startDocument(?string $version = "1.0", ?string $encoding = null, ?string $standalone = null) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_document
     */
    #[\Until('8.1')]
    public function endDocument()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_document
     */
    #[\Since('8.1')]
    public function endDocument() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_comment
     */
    #[\Until('8.1')]
    public function writeComment(string $content)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_comment
     */
    #[\Since('8.1')]
    public function writeComment(string $content) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_dtd
     */
    #[\Until('8.1')]
    public function startDtd(string $qualifiedName, ?string $publicId = null, ?string $systemId = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_dtd
     */
    #[\Since('8.1')]
    public function startDtd(string $qualifiedName, ?string $publicId = null, ?string $systemId = null) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_dtd
     */
    #[\Until('8.1')]
    public function endDtd()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_dtd
     */
    #[\Since('8.1')]
    public function endDtd() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_dtd
     */
    #[\Until('8.1')]
    public function writeDtd(string $name, ?string $publicId = null, ?string $systemId = null, ?string $content = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_dtd
     */
    #[\Since('8.1')]
    public function writeDtd(string $name, ?string $publicId = null, ?string $systemId = null, ?string $content = null) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_dtd_element
     */
    #[\Until('8.1')]
    public function startDtdElement(string $qualifiedName)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_dtd_element
     */
    #[\Since('8.1')]
    public function startDtdElement(string $qualifiedName) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_dtd_element
     */
    #[\Until('8.1')]
    public function endDtdElement()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_dtd_element
     */
    #[\Since('8.1')]
    public function endDtdElement() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_dtd_element
     */
    #[\Until('8.1')]
    public function writeDtdElement(string $name, string $content)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_dtd_element
     */
    #[\Since('8.1')]
    public function writeDtdElement(string $name, string $content) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_dtd_attlist
     */
    #[\Until('8.1')]
    public function startDtdAttlist(string $name)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_dtd_attlist
     */
    #[\Since('8.1')]
    public function startDtdAttlist(string $name) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_dtd_attlist
     */
    #[\Until('8.1')]
    public function endDtdAttlist()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_dtd_attlist
     */
    #[\Since('8.1')]
    public function endDtdAttlist() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_dtd_attlist
     */
    #[\Until('8.1')]
    public function writeDtdAttlist(string $name, string $content)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_dtd_attlist
     */
    #[\Since('8.1')]
    public function writeDtdAttlist(string $name, string $content) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_start_dtd_entity
     */
    #[\Until('8.1')]
    public function startDtdEntity(string $name, bool $isParam)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_start_dtd_entity
     */
    #[\Since('8.1')]
    public function startDtdEntity(string $name, bool $isParam) : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_end_dtd_entity
     */
    #[\Until('8.1')]
    public function endDtdEntity()
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_end_dtd_entity
     */
    #[\Since('8.1')]
    public function endDtdEntity() : bool
    {
    }
    /**
     * @return bool
     * @alias xmlwriter_write_dtd_entity
     */
    #[\Until('8.1')]
    public function writeDtdEntity(string $name, string $content, bool $isParam = false, ?string $publicId = null, ?string $systemId = null, ?string $notationData = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_write_dtd_entity
     */
    #[\Since('8.1')]
    public function writeDtdEntity(string $name, string $content, bool $isParam = false, ?string $publicId = null, ?string $systemId = null, ?string $notationData = null) : bool
    {
    }
    /**
     * @return string
     * @alias xmlwriter_output_memory
     */
    #[\Until('8.1')]
    public function outputMemory(bool $flush = true)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_output_memory
     */
    #[\Since('8.1')]
    public function outputMemory(bool $flush = true) : string
    {
    }
    /**
     * @return string|int
     * @alias xmlwriter_flush
     */
    #[\Until('8.1')]
    public function flush(bool $empty = true)
    {
    }
    /**
     * @tentative-return-type
     * @alias xmlwriter_flush
     */
    #[\Since('8.1')]
    public function flush(bool $empty = true) : string|int
    {
    }
}