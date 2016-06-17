{if $field.field_name == 'email'}

	{$field.required = 'N' scope=parent}
	{if $value == ''}
		{$value = 'test' scope=parent}
	{/if}

{/if}