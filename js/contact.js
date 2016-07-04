function fieldGetFocus(aField, defaultString)
{
  if (aField.value == defaultString)
  {
    aField.value = '';
  }
}

function fieldLoseFocus(aField, defaultString)
{
  if (!aField.value)
  {
    aField.value = defaultString;
  }
}
