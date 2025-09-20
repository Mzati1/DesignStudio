# PayChangu Payment Setup

## The Error You Encountered

The error `Request failed: Missing PAYCHANGU_TEST_SECRET_KEY in environment` occurs because the PayChangu payment service requires API credentials to be configured in your environment variables.

## Quick Fix

### Option 1: Use the Setup Command
```bash
php artisan paychangu:setup
```

This command will automatically add the required PayChangu configuration to your `.env` file.

### Option 2: Manual Setup

Add these lines to your `.env` file:

```env
# PayChangu Configuration
PAYCHANGU_API_URL=https://api.paychangu.com/payment
PAYCHANGU_VERIFY_TRANSACTION_URL=https://api.paychangu.com/verify-payment
PAYCHANGU_TEST_SECRET_KEY=your-actual-test-secret-key-here
PAYCHANGU_LIVE_SECRET_KEY=your-actual-live-secret-key-here
PAYCHANGU_MODE=test
```

## Getting Your PayChangu Credentials

1. **Sign up for PayChangu**: Visit [PayChangu](https://paychangu.com) and create an account
2. **Get API Keys**: In your PayChangu dashboard, navigate to API settings
3. **Copy the Keys**: Copy your test and live secret keys
4. **Update .env**: Replace the placeholder values with your actual keys

## Environment Modes

- **Test Mode**: Set `PAYCHANGU_MODE=test` for development/testing
- **Live Mode**: Set `PAYCHANGU_MODE=live` for production

## After Setup

1. Clear the configuration cache:
   ```bash
   php artisan config:clear
   ```

2. Test the payment flow by clicking the "Complete Payment" button

## What Was Fixed

✅ **Added PayChangu configuration to `config/services.php`**
✅ **Updated PaymentService to use config instead of direct env calls**
✅ **Created setup command for easy configuration**
✅ **Added helpful error messages for development**
✅ **Improved error handling with environment-specific messages**

## Troubleshooting

If you still get errors after setup:

1. **Check .env file**: Make sure the variables are correctly set
2. **Clear cache**: Run `php artisan config:clear`
3. **Verify keys**: Ensure your PayChangu API keys are valid
4. **Check mode**: Make sure `PAYCHANGU_MODE` is set to `test` for development

## Support

For PayChangu-specific issues, contact their support team through their official channels.
